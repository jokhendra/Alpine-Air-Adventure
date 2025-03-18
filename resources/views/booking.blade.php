@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include("common.header")
<body class="bg-gradient-to-b from-sky-50 to-blue-100 min-h-screen">
  @include("common.nav")
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-5xl mx-auto">
      <h1 class="text-3xl md:text-5xl font-bold text-center mb-2 text-blue-900 drop-shadow-sm">Book Your Power Hang Gliding Experience</h1>
      <p class="text-center text-gray-700 mb-8 text-lg">Experience the thrill of flight with our professional instructors and top-quality equipment</p>
      
      <!-- Hero Image -->
      <div class="relative rounded-xl overflow-hidden shadow-2xl mb-10 h-64 md:h-96">
        <img src="https://dam.destination.one/806001/7b8b4f94048385dcc3e9779db40e400bbe43c1f57a8af663ca1a8d6e3ade7b58/.jpg" alt="Power Hang Gliding Experience" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 to-transparent flex items-center">
          <div class="px-8 max-w-md">
            <h2 class="text-3xl font-bold text-white mb-2">Soar Above the Ordinary</h2>
            <p class="text-sky-100 mb-4">Book your adventure today and experience the freedom of flight</p>
            <a href="#booking-form" class="inline-block bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-105 focus:outline-none">
              Book Now
            </a>
          </div>
        </div>
      </div>
      
      <div id="booking-form" class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 border border-blue-50">
        <!-- Booking Form Header -->
        <div class="bg-gradient-to-r from-sky-800 via-blue-700 to-indigo-800 p-8 relative overflow-hidden">
          <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 blur-2xl"></div>
          <div class="absolute bottom-0 left-0 w-40 h-40 bg-sky-400/20 rounded-full -ml-20 -mb-20 blur-xl"></div>
          <h2 class="text-3xl font-bold text-white relative z-10">Reservation Details</h2>
          <p class="text-sky-100 text-lg relative z-10">Please fill out the form below to book your power hang gliding session</p>
        </div>
        
        <!-- Booking Form -->
        <form action="{{ route('booking.preview') }}" method="POST" class="p-8">
          @csrf
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Personal Information -->
            <div class="space-y-6">
              <h3 class="text-xl font-semibold text-gray-800 border-b border-blue-100 pb-2 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Personal Information
              </h3>
              
              <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name *</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
              </div>
              
              <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address *</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
              </div>
              
              <div class="space-y-2">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
              </div>
              
              <div class="space-y-2">
                <label for="experience" class="block text-sm font-medium text-gray-700">Experience Level</label>
                <select id="experience" name="experience" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                  <option value="beginner">Beginner (No Experience)</option>
                  <option value="intermediate">Intermediate (Some Experience)</option>
                  <option value="advanced">Advanced (Experienced Pilot)</option>
                </select>
              </div>
            </div>
            
            <!-- Booking Details -->
            <div class="space-y-6">
              <h3 class="text-xl font-semibold text-gray-800 border-b border-blue-100 pb-2 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Booking Details
              </h3>
              
              <div class="space-y-2">
                <label for="package" class="block text-sm font-medium text-gray-700">Select Package *</label>
                <select id="package" name="package" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                  <option value="intro">Introductory Flight (30 min) - $150</option>
                  <option value="basic">Basic Training (2 hours) - $299</option>
                  <option value="advanced">Advanced Training (Full Day) - $599</option>
                  <option value="certification">Certification Course (3 Days) - $1,499</option>
                </select>
              </div>
              
              <div class="space-y-2">
                <label for="date" class="block text-sm font-medium text-gray-700">Preferred Date *</label>
                <input type="date" id="date" name="date" required min="{{ date('Y-m-d') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
              </div>
              
              <div class="space-y-2">
                <label for="time" class="block text-sm font-medium text-gray-700">Preferred Time *</label>
                <select id="time" name="time" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                  <option value="morning">Morning (8:00 AM - 11:00 AM)</option>
                  <option value="midday">Midday (11:00 AM - 2:00 PM)</option>
                  <option value="afternoon">Afternoon (2:00 PM - 5:00 PM)</option>
                </select>
              </div>
              
              <div class="space-y-2">
                <label for="participants" class="block text-sm font-medium text-gray-700">Number of Participants *</label>
                <select id="participants" name="participants" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                  <option value="1">1 Person</option>
                  <option value="2">2 People</option>
                  <option value="3">3 People</option>
                  <option value="4">4 People</option>
                  <option value="5+">5+ People (Group Discount)</option>
                </select>
              </div>
            </div>
          </div>
          
          <!-- Additional Information -->
          <div class="mt-8 space-y-6">
            <h3 class="text-xl font-semibold text-gray-800 border-b border-blue-100 pb-2 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Additional Information
            </h3>
            
            <div class="space-y-2">
              <label for="special_requests" class="block text-sm font-medium text-gray-700">Special Requests or Medical Conditions</label>
              <textarea id="special_requests" name="special_requests" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"></textarea>
            </div>
            
            <div class="flex items-start p-4 bg-blue-50 rounded-lg border border-blue-100">
              <div class="flex items-center h-5">
                <input id="terms" name="terms" type="checkbox" required class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
              </div>
              <div class="ml-3 text-sm">
                <label for="terms" class="font-medium text-gray-700">I agree to the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a> and acknowledge the <a href="#" class="text-blue-600 hover:underline">cancellation policy</a> *</label>
              </div>
            </div>
          </div>
          
          <!-- Submit Button -->
          <div class="mt-8">
            <button type="submit" class="w-full bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg transition duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-opacity-50">
              <span class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Preview Booking
              </span>
            </button>
            <p class="text-center text-sm text-gray-500 mt-2">You'll be able to review your booking before payment</p>
          </div>
        </form>
      </div>
      
      <!-- Package Comparison -->
      <div class="mt-16">
        <h2 class="text-3xl font-bold text-center text-blue-900 mb-8">Choose Your Perfect Experience</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <!-- Intro Package -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 hover:scale-105 border border-blue-50">
            <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-6 text-center">
              <h3 class="text-xl font-bold text-white">Introductory Flight</h3>
              <p class="text-blue-100 text-sm">Perfect for first-timers</p>
              <p class="text-3xl font-bold text-white mt-2">$150</p>
            </div>
            <div class="p-6">
              <ul class="space-y-3">
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  30 minute flight
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Basic instruction
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Photo package
                </li>
              </ul>
              <button onclick="selectPackage('intro')" class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                Select Package
              </button>
            </div>
          </div>
          
          <!-- Basic Package -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 hover:scale-105 border border-blue-50">
            <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 p-6 text-center">
              <h3 class="text-xl font-bold text-white">Basic Training</h3>
              <p class="text-indigo-100 text-sm">Learn the fundamentals</p>
              <p class="text-3xl font-bold text-white mt-2">$299</p>
            </div>
            <div class="p-6">
              <ul class="space-y-3">
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  2 hour session
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Ground training
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Hands-on flying
                </li>
              </ul>
              <button onclick="selectPackage('basic')" class="w-full mt-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                Select Package
              </button>
            </div>
          </div>
          
          <!-- Advanced Package -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 hover:scale-105 border border-blue-50 ring-2 ring-amber-400">
            <div class="bg-gradient-to-br from-purple-600 to-purple-800 p-6 text-center relative">
              <div class="absolute top-0 right-0 bg-amber-400 text-purple-900 text-xs font-bold px-2 py-1 rounded-bl-lg">POPULAR</div>
              <h3 class="text-xl font-bold text-white">Advanced Training</h3>
              <p class="text-purple-100 text-sm">Full day experience</p>
              <p class="text-3xl font-bold text-white mt-2">$599</p>
            </div>
            <div class="p-6">
              <ul class="space-y-3">
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-purple-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Full day training
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-purple-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Advanced techniques
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-purple-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Lunch included
                </li>
              </ul>
              <button onclick="selectPackage('advanced')" class="w-full mt-4 bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                Select Package
              </button>
            </div>
          </div>
          
          <!-- Certification Package -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 hover:scale-105 border border-blue-50">
            <div class="bg-gradient-to-br from-teal-600 to-teal-800 p-6 text-center">
              <h3 class="text-xl font-bold text-white">Certification Course</h3>
              <p class="text-teal-100 text-sm">Become a certified pilot</p>
              <p class="text-3xl font-bold text-white mt-2">$1,499</p>
            </div>
            <div class="p-6">
              <ul class="space-y-3">
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-teal-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  3-day program
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-teal-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Official certification
                </li>
                <li class="flex items-start">
                  <svg class="h-5 w-5 text-teal-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  All meals included
                </li>
              </ul>
              <button onclick="selectPackage('certification')" class="w-full mt-4 bg-teal-600 hover:bg-teal-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                Select Package
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Additional Information Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">
        <!-- What to Bring -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 hover:-translate-y-1 border border-blue-50">
          <div class="bg-gradient-to-r from-blue-700 to-blue-900 p-6 flex items-center">
            <div class="bg-white/20 p-3 rounded-full mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white">What to Bring</h3>
          </div>
          <div class="p-6">
            <ul class="space-y-3 text-gray-700">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Comfortable clothing appropriate for weather
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Sunglasses and sunscreen
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Closed-toe shoes
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Water bottle
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Camera (optional)
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Weather Policy -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 hover:-translate-y-1 border border-blue-50">
          <div class="bg-gradient-to-r from-indigo-700 to-indigo-900 p-6 flex items-center">
            <div class="bg-white/20 p-3 rounded-full mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white">Weather Policy</h3>
          </div>
          <div class="p-6">
            <p class="text-gray-700 mb-4">Flights are weather dependent. If conditions are unsuitable, we will reschedule your booking at no additional cost.</p>
            <p class="text-gray-700">Our team will contact you 24 hours before your scheduled flight to confirm weather conditions.</p>
            <div class="mt-4 p-3 bg-blue-50 rounded-lg border border-blue-100 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="text-sm text-blue-800">Safety is our top priority</p>
            </div>
          </div>
        </div>
        
        <!-- Cancellation Policy -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-blue-200 hover:-translate-y-1 border border-blue-50">
          <div class="bg-gradient-to-r from-purple-700 to-purple-900 p-6 flex items-center">
            <div class="bg-white/20 p-3 rounded-full mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white">Cancellation Policy</h3>
          </div>
          <div class="p-6">
            <ul class="space-y-2 text-gray-700">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Free rescheduling up to 48 hours before
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                50% fee for cancellations within 48 hours
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Gift certificates available for rescheduling
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- FAQ Section -->
      <div class="mt-12 bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-sky-800 via-blue-700 to-indigo-800 p-6">
          <h2 class="text-2xl font-semibold text-white">Frequently Asked Questions</h2>
        </div>
        <div class="p-6 space-y-4">
          <div class="border-b pb-4">
            <h3 class="text-lg font-medium text-gray-900">Do I need prior experience to fly a power hang glider?</h3>
            <p class="mt-2 text-gray-600">No prior experience is necessary for our introductory flights. Our certified instructors will guide you through every step of the process.</p>
          </div>
          <div class="border-b pb-4">
            <h3 class="text-lg font-medium text-gray-900">Is there a weight limit for flying?</h3>
            <p class="mt-2 text-gray-600">Yes, for safety reasons we have a weight limit of 250 pounds (113 kg) per person. This ensures optimal performance of the aircraft.</p>
          </div>
          <div class="border-b pb-4">
            <h3 class="text-lg font-medium text-gray-900">How long does a typical session last?</h3>
            <p class="mt-2 text-gray-600">Our introductory flights last approximately 30 minutes in the air, with an additional 30 minutes for ground instruction. Full training sessions vary from 2 hours to multiple days.</p>
          </div>
          <div>
            <h3 class="text-lg font-medium text-gray-900">Can I bring a friend or family member to watch?</h3>
            <p class="mt-2 text-gray-600">Absolutely! Spectators are welcome at our facility. We have a designated viewing area where they can watch and take photos of your adventure.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include("common.footer")
  
  <script>
    // Simple form validation
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      
      form.addEventListener('submit', function(event) {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const date = document.getElementById('date').value;
        const terms = document.getElementById('terms').checked;
        
        if (!name || !email || !phone || !date || !terms) {
          event.preventDefault();
          alert('Please fill in all required fields and accept the terms and conditions.');
        }
      });
      
      // Update minimum date to today
      const dateInput = document.getElementById('date');
      const today = new Date().toISOString().split('T')[0];
      dateInput.setAttribute('min', today);
      
      // Package selection logic
      const packageSelect = document.getElementById('package');
      const experienceSelect = document.getElementById('experience');
      
      packageSelect.addEventListener('change', function() {
        if (this.value === 'advanced' || this.value === 'certification') {
          if (experienceSelect.value === 'beginner') {
            alert('Advanced and certification packages are recommended for pilots with some prior experience. You may still book, but please be aware of the skill level required.');
          }
        }
      });
    });
  </script>
</body>
</html>
@endsection