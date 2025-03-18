<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function contact(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'consent' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        
        // Save to database with error handling
        try {
            Contact::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message,
                'consent' => $request->has('consent')
            ]);
            
            // Return with success message
            return redirect()->back()->with('success', 'Thank you for your message! Your information has been saved and we will get back to you soon.');
        } catch (\Exception $e) {
            // Log the error for administrators
            Log::error('Contact form database error: ' . $e->getMessage());
            
            // Return with error message
            return redirect()->back()
                ->with('error', 'There was a problem saving your message. Please try again or contact us directly.')
                ->withInput();
        }
    }
} 