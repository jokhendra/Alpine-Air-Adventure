@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Booking Preview</h1>
                <p class="mt-2 text-gray-600">Please review your booking details before proceeding to payment</p>
            </div>

            <!-- Booking Details -->
            <div class="bg-gray-50 rounded-xl p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Booking Details</h2>
                <div class="space-y-4">
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Name:</span>
                        <span class="font-medium">{{ $booking['name'] }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Email:</span>
                        <span class="font-medium">{{ $booking['email'] }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Phone:</span>
                        <span class="font-medium">{{ $booking['phone'] }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Experience Level:</span>
                        <span class="font-medium capitalize">{{ $booking['experience'] }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Package:</span>
                        <span class="font-medium capitalize">{{ $booking['package'] }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Date:</span>
                        <span class="font-medium">{{ \Carbon\Carbon::parse($booking['date'])->format('F j, Y') }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Time:</span>
                        <span class="font-medium">{{ $booking['time'] }}</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Participants:</span>
                        <span class="font-medium">{{ $booking['participants'] }}</span>
                    </div>
                    @if(isset($booking['special_requests']) && $booking['special_requests'])
                    <div class="border-b pb-2">
                        <span class="text-gray-600">Special Requests:</span>
                        <p class="mt-1 text-gray-800">{{ $booking['special_requests'] }}</p>
                    </div>
                    @endif
                    <div class="flex justify-between pt-4">
                        <span class="text-lg font-semibold">Total Amount:</span>
                        <span class="text-lg font-bold text-amber-600">${{ number_format($price, 2) }}</span>
                    </div>
                </div>
            </div>

            <!-- Payment Section -->
            <div class="space-y-6">
                <div x-data="{ paymentProcessing: false }" class="space-y-4">
                    <div x-show="!paymentProcessing">
                        <div id="paypal-button-container"></div>
                    </div>
                    <div x-show="paymentProcessing" class="text-center">
                        <div class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-amber-500">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Processing payment...
                        </div>
                    </div>
                </div>

                <div class="flex justify-between mt-8">
                    <a href="{{ url()->previous() }}" class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                        Back to Form
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://www.paypal.com/sdk/js?client-id={{ config('paypal.sandbox.client_id') }}&currency=USD"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    paypal.Buttons({
        createOrder: async () => {
            try {
                const response = await fetch('/api/booking/create', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                const data = await response.json();
                if (!data.success) throw new Error(data.error);
                return data.paypal_order_id;
            } catch (error) {
                console.error('Error:', error);
                alert('Error creating order. Please try again.');
                return null;
            }
        },
        onApprove: async (data, actions) => {
            const processingElement = document.querySelector('[x-data]').__x.$data;
            processingElement.paymentProcessing = true;

            try {
                const response = await fetch('/api/booking/capture-payment', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        order_id: data.orderID
                    })
                });

                const result = await response.json();
                if (result.success) {
                    window.location.href = '/booking/success';
                } else {
                    throw new Error(result.error);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Error processing payment: ' + error.message);
                processingElement.paymentProcessing = false;
            }
        },
        onError: (err) => {
            console.error('PayPal Error:', err);
            alert('Error processing PayPal payment. Please try again.');
        }
    }).render('#paypal-button-container');
});
</script>
@endpush
@endsection 