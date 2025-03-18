<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
// use App\Mail\BookingConfirmation;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class BookingController extends Controller
{
    private $paypal;

    public function __construct()
    {
        try {
            $this->paypal = new PayPalClient;
            $this->paypal->setApiCredentials(config('paypal'));
            $this->paypal->getAccessToken();
        } catch (\Exception $e) {
            Log::error('PayPal initialization error: ' . $e->getMessage());
        }
    }

    public function checkAvailability(Request $request)
    {
        try {
            $request->validate([
                'date' => 'required|date|after:today',
                'service_type' => 'required|string'
            ]);

            $existingBookings = Booking::where('booking_date', $request->date)
                ->where('status', '!=', 'cancelled')
                ->get();

            $availableSlots = $this->getAvailableSlots($request->date, $existingBookings);
            $pricing = $this->getPricing($request->service_type);

            return response()->json([
                'success' => true,
                'available_slots' => $availableSlots,
                'pricing' => $pricing
            ]);
        } catch (\Exception $e) {
            Log::error('Availability check error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Error checking availability: ' . $e->getMessage()
            ], 422);
        }
    }

    public function preview(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'experience' => 'required|string',
            'package' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'participants' => 'required|string',
            'special_requests' => 'nullable|string',
        ]);

        // Get package price based on selection
        $prices = [
            'intro' => 150,
            'basic' => 299,
            'advanced' => 599,
            'certification' => 1499
        ];

        $price = $prices[$validated['package']] ?? 0;
        
        // Store booking data in session for payment
        session(['booking_data' => array_merge($validated, ['price' => $price])]);

        return view('booking.preview', [
            'booking' => $validated,
            'price' => $price
        ]);
    }

    public function createBooking(Request $request)
    {
        $bookingData = session('booking_data');
        
        if (!$bookingData) {
            return response()->json([
                'success' => false,
                'error' => 'Booking data not found'
            ]);
        }

        try {
            // Create PayPal order
            $order = $this->createPayPalOrder($bookingData['price']);

            // Store booking in database with pending status
            $booking = Booking::create([
                'name' => $bookingData['name'],
                'email' => $bookingData['email'],
                'phone' => $bookingData['phone'],
                'experience_level' => $bookingData['experience'],
                'package_type' => $bookingData['package'],
                'booking_date' => $bookingData['date'],
                'booking_time' => $bookingData['time'],
                'participants' => $bookingData['participants'],
                'special_requests' => $bookingData['special_requests'] ?? null,
                'price' => $bookingData['price'],
                'status' => 'pending',
                'paypal_order_id' => $order['id']
            ]);

            return response()->json([
                'success' => true,
                'booking_id' => $booking->id,
                'paypal_order_id' => $order['id']
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Failed to create booking: ' . $e->getMessage()
            ]);
        }
    }

    public function capturePayment(Request $request)
    {
        try {
            $orderId = $request->input('order_id');
            $bookingId = $request->input('booking_id');

            // Capture the PayPal payment
            $captureResponse = $this->capturePayPalPayment($orderId);

            if ($captureResponse['status'] === 'COMPLETED') {
                // Update booking status
                $booking = Booking::findOrFail($bookingId);
                $booking->status = 'confirmed';
                $booking->payment_id = $captureResponse['id'];
                $booking->save();

                // Send confirmation email
                /* Commented out email sending for now
                Mail::to($booking->email)->send(new BookingConfirmation($booking));
                */

                return response()->json([
                    'success' => true,
                    'message' => 'Payment captured successfully'
                ]);
            }

            return response()->json([
                'success' => false,
                'error' => 'Payment capture failed'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Payment capture failed: ' . $e->getMessage()
            ]);
        }
    }

    public function success()
    {
        return view('booking.success');
    }

    private function createPayPalOrder($amount)
    {
        // Implement PayPal order creation logic here
        // This is a placeholder - you'll need to implement the actual PayPal API call
        return [
            'id' => 'ORDER_' . uniqid(),
            'status' => 'CREATED',
            'amount' => $amount
        ];
    }

    private function capturePayPalPayment($orderId)
    {
        // Implement PayPal payment capture logic here
        // This is a placeholder - you'll need to implement the actual PayPal API call
        return [
            'id' => 'CAPTURE_' . uniqid(),
            'status' => 'COMPLETED'
        ];
    }

    private function getAvailableSlots($date, $existingBookings)
    {
        $businessHours = [
            'start' => '09:00',
            'end' => '17:00'
        ];

        $slots = [];
        $current = strtotime($businessHours['start']);
        $end = strtotime($businessHours['end']);

        while ($current < $end) {
            $timeSlot = date('H:i', $current);
            
            if (!$this->isTimeSlotBooked($timeSlot, $existingBookings)) {
                $slots[] = $timeSlot;
            }
            
            $current = strtotime('+1 hour', $current);
        }

        return $slots;
    }

    private function isTimeSlotBooked($timeSlot, $existingBookings)
    {
        foreach ($existingBookings as $booking) {
            if ($booking->start_time->format('H:i') === $timeSlot) {
                return true;
            }
        }
        return false;
    }

    private function isSlotAvailable($date, $time)
    {
        return !Booking::where('booking_date', $date)
            ->where('start_time', $time)
            ->where('status', '!=', 'cancelled')
            ->exists();
    }

    private function getPricing($serviceType)
    {
        $prices = [
            'training_session' => 150.00,
            'equipment_trial' => 100.00,
            'private_consultation' => 75.00,
            'guided_flight' => 200.00
        ];

        return $prices[$serviceType] ?? 0;
    }

    private function calculateAmount($serviceType, $duration)
    {
        $basePrice = $this->getPricing($serviceType);
        return $basePrice * $duration;
    }
} 