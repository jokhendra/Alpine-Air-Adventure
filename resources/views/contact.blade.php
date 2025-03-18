@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include('common.header')
<body>
  @include('common.nav')
  
  <!-- Hero Section with Parallax Effect -->
  <div class="relative h-80 bg-blue-700 overflow-hidden">
    <div class="absolute inset-0 z-0">
      <img src="https://dam.destination.one/806001/7b8b4f94048385dcc3e9779db40e400bbe43c1f57a8af663ca1a8d6e3ade7b58/.jpg" alt="Hang glider in the sky" class="w-full h-full object-cover opacity-40">
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 to-blue-700/50"></div>
    <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
      <div class="max-w-2xl">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">Get In Touch</h1>
        <p class="text-xl text-blue-100 max-w-xl leading-relaxed">We're here to answer your questions and help you take flight. Reach out to our team of passionate hang gliding experts.</p>
      </div>
    </div>
  </div>
  
  <!-- Contact Section -->
  <div class="bg-gradient-to-b from-blue-50 to-white py-16">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12 max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4">Contact Us</h2>
        <p class="text-lg text-gray-600">Have questions about our power hang gliders or training programs? We're here to help! Reach out to our team using the form below or visit us at our location.</p>
      </div>
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Information and Map -->
        <div>
          <div class="bg-white rounded-xl shadow-xl p-8 mb-8 transform transition duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-2xl font-bold text-blue-800 mb-6 flex items-center">
              <span class="inline-block mr-3 p-2 bg-blue-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </span>
              Contact Information
            </h2>
            
            <div class="space-y-6">
              <div class="flex items-start group">
                <div class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900">Our Location</h3>
                  <p class="mt-1 text-gray-600">123 Skyway Drive, Mountain View, CA 94043, USA</p>
                  <a href="https://maps.google.com" target="_blank" class="inline-block mt-2 text-blue-600 hover:text-blue-800 font-medium text-sm">Get Directions →</a>
                </div>
              </div>
              
              <div class="flex items-start group">
                <div class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                  <p class="mt-1 text-gray-600">+1 (800) 123-4567</p>
                  <p class="mt-1 text-gray-600">+1 (650) 987-6543</p>
                  <a href="tel:+18001234567" class="inline-block mt-2 text-blue-600 hover:text-blue-800 font-medium text-sm">Call Us Now →</a>
                </div>
              </div>
              
              <div class="flex items-start group">
                <div class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900">Email</h3>
                  <p class="mt-1 text-gray-600">info@powerhanggliders.com</p>
                  <p class="mt-1 text-gray-600">support@powerhanggliders.com</p>
                  <a href="mailto:info@powerhanggliders.com" class="inline-block mt-2 text-blue-600 hover:text-blue-800 font-medium text-sm">Email Us →</a>
                </div>
              </div>
              
              <div class="flex items-start group">
                <div class="flex-shrink-0 h-12 w-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900">Business Hours</h3>
                  <div class="mt-2 space-y-1">
                    <div class="flex justify-between">
                      <span class="text-gray-600">Monday - Friday:</span>
                      <span class="font-medium">9:00 AM - 6:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="text-gray-600">Saturday:</span>
                      <span class="font-medium">10:00 AM - 4:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="text-gray-600">Sunday:</span>
                      <span class="font-medium">Closed</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Social Media Links -->
            <div class="mt-8 pt-6 border-t border-gray-200">
              <h3 class="text-lg font-medium text-gray-900 mb-4">Connect With Us</h3>
              <div class="flex space-x-4">
                <a href="#" class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition duration-300">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-400 text-white hover:bg-blue-500 transition duration-300">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                  </svg>
                </a>
                <a href="#" class="h-10 w-10 flex items-center justify-center rounded-full bg-red-600 text-white hover:bg-red-700 transition duration-300">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-800 text-white hover:bg-blue-900 transition duration-300">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          
          <!-- Map -->
          <div class="bg-white rounded-xl shadow-xl p-8 transform transition duration-300 hover:shadow-2xl hover:-translate-y-1">
            <h2 class="text-2xl font-bold text-blue-800 mb-6 flex items-center">
              <span class="inline-block mr-3 p-2 bg-blue-100 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                </svg>
              </span>
              Find Us
            </h2>
            <div class="h-96 w-full rounded-lg overflow-hidden shadow-md">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.639290621064!2d-122.08401492392031!3d37.4219998326378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad8f%3A0x29cdf01a44fc687f!2sGoogle%20Building%2040!5e0!3m2!1sen!2sus!4v1649285324079!5m2!1sen!2sus" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
            <div class="mt-4 flex justify-center">
              <a href="https://maps.google.com" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Get Directions
              </a>
            </div>
          </div>
        </div>
        
        <!-- Contact Form -->
        <div class="bg-white rounded-xl shadow-xl h-[800px] p-8 transform transition duration-300 hover:shadow-2xl hover:-translate-y-1">
          <h2 class="text-2xl font-bold text-blue-800 mb-6 flex items-center">
            <span class="inline-block mr-3 p-2 bg-blue-100 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
              </svg>
            </span>
            Send Us a Message
          </h2>
          
          @if(session('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6 animate__animated animate__fadeIn" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
              </svg>
            </span>
          </div>
          @endif
          
          @if(session('error'))
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6 animate__animated animate__fadeIn" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
              </svg>
            </span>
          </div>
          @endif
          
          @if($errors->any())
          <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">Please correct the errors below and try again.</span>
            <ul class="mt-2 list-disc list-inside">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          
          <form class="space-y-6" action="/contact" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="relative">
                <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-blue-600 opacity-0 transition-opacity duration-200 input-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
              
              <div class="relative">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-blue-600 opacity-0 transition-opacity duration-200 input-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </div>
            
            <div class="relative">
              <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-blue-600 opacity-0 transition-opacity duration-200 input-icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            
            <div>
              <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
              <div class="relative">
                <select id="subject" name="subject" class="appearance-none w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-white" required>
                  <option value="">Select a subject</option>
                  <option value="product_inquiry">Product Inquiry</option>
                  <option value="training">Training Programs</option>
                  <option value="maintenance">Maintenance & Repairs</option>
                  <option value="parts">Spare Parts</option>
                  <option value="other">Other</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </div>
            
            <div>
              <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
              <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" required></textarea>
            </div>
            
            <div class="flex items-center">
              <input type="checkbox" id="consent" name="consent" class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition duration-200" required>
              <label for="consent" class="ml-3 block text-sm text-gray-700">
                I consent to having this website store my submitted information so they can respond to my inquiry.
              </label>
            </div>
            
            <div>
              <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 ease-in-out transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 shadow-lg hover:shadow-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- FAQ Section -->
  <div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-blue-900">Frequently Asked Questions</h2>
        <p class="text-lg text-gray-600 mt-4">Find answers to common questions about our power hang gliders</p>
      </div>
      
      <div class="max-w-3xl mx-auto">
        <div class="space-y-6">
          <!-- FAQ Item 1 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <button class="flex justify-between items-center w-full px-6 py-4 text-lg font-medium text-left text-blue-800 focus:outline-none">
              <span>How do I schedule a test flight?</span>
              <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="px-6 py-4 text-gray-600">
              <p>To schedule a test flight, please fill out our contact form with your preferred dates and times. Our team will get back to you within 24 hours to confirm your appointment. Test flights are available for qualified pilots with proper certification.</p>
            </div>
          </div>
          
          <!-- FAQ Item 2 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <button class="flex justify-between items-center w-full px-6 py-4 text-lg font-medium text-left text-blue-800 focus:outline-none">
              <span>What training is required to fly a power hang glider?</span>
              <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="px-6 py-4 text-gray-600">
              <p>Power hang gliding requires proper training and certification. We offer comprehensive training programs for beginners through advanced pilots. Our basic training course includes ground school and a minimum of 10 flight hours with a certified instructor.</p>
            </div>
          </div>
          
          <!-- FAQ Item 3 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <button class="flex justify-between items-center w-full px-6 py-4 text-lg font-medium text-left text-blue-800 focus:outline-none">
              <span>Do you offer financing options for your gliders?</span>
              <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="px-6 py-4 text-gray-600">
              <p>Yes, we offer several financing options to help make your dream of flying a reality. We partner with trusted financial institutions to provide competitive rates and flexible payment plans. Contact our sales team for more information about current financing promotions.</p>
            </div>
          </div>
          
          <!-- FAQ Item 4 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <button class="flex justify-between items-center w-full px-6 py-4 text-lg font-medium text-left text-blue-800 focus:outline-none">
              <span>What maintenance is required for power hang gliders?</span>
              <svg class="h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="px-6 py-4 text-gray-600">
              <p>Regular maintenance is essential for safe flying. Our power hang gliders require engine maintenance every 50-100 hours of flight time, and sail inspections annually. We provide comprehensive maintenance manuals and offer service packages to keep your aircraft in optimal condition.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  @include('common.footer')
  
  <!-- Simple JavaScript for FAQ accordion -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const faqButtons = document.querySelectorAll('.bg-white.rounded-lg.shadow-md.overflow-hidden button');
      
      faqButtons.forEach(button => {
        button.addEventListener('click', function() {
          const content = this.nextElementSibling;
          const isVisible = content.style.display !== 'none';
          
          // Hide all FAQ answers
          document.querySelectorAll('.bg-white.rounded-lg.shadow-md.overflow-hidden div.px-6.py-4').forEach(div => {
            div.style.display = 'none';
          });
          
          // Reset all icons
          document.querySelectorAll('.bg-white.rounded-lg.shadow-md.overflow-hidden svg').forEach(svg => {
            svg.classList.remove('transform', 'rotate-180');
          });
          
          // If the clicked item wasn't visible, show it
          if (!isVisible) {
            content.style.display = 'block';
            this.querySelector('svg').classList.add('transform', 'rotate-180');
          }
        });
      });
      
      // Hide all FAQ answers initially
      document.querySelectorAll('.bg-white.rounded-lg.shadow-md.overflow-hidden div.px-6.py-4').forEach(div => {
        div.style.display = 'none';
      });
    });
  </script>
  
  <script>
    // Make alert messages dismissible
    document.addEventListener('DOMContentLoaded', function() {
      const closeButtons = document.querySelectorAll('.bg-green-100 svg, .bg-red-100 svg');
      closeButtons.forEach(button => {
        button.addEventListener('click', function() {
          const alert = this.closest('[role="alert"]');
          alert.classList.add('opacity-0');
          setTimeout(() => {
            alert.style.display = 'none';
          }, 300);
        });
      });
    });
  </script>
</body>
</html>
@endsection