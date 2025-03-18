@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
      <div class="flex flex-col items-center text-center">
        <h1 class="text-5xl font-bold text-amber-600 mb-6">About Power Hang Glider</h1>
        <div class="w-24 h-1 bg-amber-600 mb-8"></div>
        <p class="text-xl text-gray-700 max-w-3xl">
          At Power Hang Glider, we are passionate about providing exhilarating and safe hang gliding experiences. Our innovative designs and commitment to excellence set us apart in the industry.
        </p>
      </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row items-center gap-12">
      <div class="md:w-1/2">
        <img src="https://picsum.photos/600/400?random=20" alt="Our Story" class="rounded-lg shadow-lg w-full h-auto">
      </div>
      <div class="md:w-1/2">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Journey</h2>
        <p class="text-gray-600 mb-4">
          Established in 2005, Power Hang Glider started with a vision to make hang gliding accessible and thrilling for everyone. Our founders, avid gliders themselves, have grown the company from a small startup to a leader in the industry.
        </p>
        <p class="text-gray-600 mb-4">
          We have pioneered several innovations in hang glider design, ensuring safety and performance are at the forefront of our products.
        </p>
        <p class="text-gray-600">
          Today, we are proud to offer unforgettable experiences to adventurers around the world, backed by our dedicated team and cutting-edge technology.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Our Values Section -->
<section class="bg-gray-100 py-16">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Core Values</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Safety, innovation, and customer satisfaction are the pillars of our company culture.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Value 1 -->
      <div class="bg-white p-8 rounded-lg shadow-md text-center">
        <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Safety</h3>
        <p class="text-gray-600">
          We prioritize safety in every aspect of our operations, ensuring our customers can enjoy their flights with peace of mind.
        </p>
      </div>
      
      <!-- Value 2 -->
      <div class="bg-white p-8 rounded-lg shadow-md text-center">
        <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Innovation</h3>
        <p class="text-gray-600">
          Our team is dedicated to pushing the boundaries of hang gliding technology, offering the latest advancements to our customers.
        </p>
      </div>
      
      <!-- Value 3 -->
      <div class="bg-white p-8 rounded-lg shadow-md text-center">
        <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Customer Satisfaction</h3>
        <p class="text-gray-600">
          We strive to exceed our customers' expectations, providing exceptional service and unforgettable experiences.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Our team of experienced pilots and engineers is dedicated to delivering the best hang gliding experiences.
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Team Member 1 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-1">John Doe</h3>
          <p class="text-amber-600 mb-3">CEO & Founder</p>
          <p class="text-gray-600 text-sm">
            With over 15 years of industry experience, John leads our company with vision and passion.
          </p>
          <div class="mt-4 flex space-x-3">
            <a href="#" class="text-gray-400 hover:text-blue-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Team Member 2 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-1">Jane Smith</h3>
          <p class="text-amber-600 mb-3">CTO</p>
          <p class="text-gray-600 text-sm">
            Jane oversees our technical strategy and ensures we stay at the cutting edge of innovation.
          </p>
          <div class="mt-4 flex space-x-3">
            <a href="#" class="text-gray-400 hover:text-blue-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Team Member 3 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-1">Michael Johnson</h3>
          <p class="text-amber-600 mb-3">Design Director</p>
          <p class="text-gray-600 text-sm">
            Michael brings creativity and user-centered design principles to all our products.
          </p>
          <div class="mt-4 flex space-x-3">
            <a href="#" class="text-gray-400 hover:text-blue-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Team Member 4 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Team Member" class="w-full h-64 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-1">Sarah Williams</h3>
          <p class="text-amber-600 mb-3">Marketing Director</p>
          <p class="text-gray-600 text-sm">
            Sarah develops our marketing strategies and helps us connect with our customers.
          </p>
          <div class="mt-4 flex space-x-3">
            <a href="#" class="text-gray-400 hover:text-blue-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-blue-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="bg-amber-600 py-16 text-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
      <!-- Stat 1 -->
      <div>
        <div class="text-4xl font-bold mb-2">10+</div>
        <div class="text-xl">Years of Experience</div>
      </div>
      
      <!-- Stat 2 -->
      <div>
        <div class="text-4xl font-bold mb-2">500+</div>
        <div class="text-xl">Projects Completed</div>
      </div>
      
      <!-- Stat 3 -->
      <div>
        <div class="text-4xl font-bold mb-2">50+</div>
        <div class="text-xl">Team Members</div>
      </div>
      
      <!-- Stat 4 -->
      <div>
        <div class="text-4xl font-bold mb-2">200+</div>
        <div class="text-xl">Happy Clients</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-16">
  <div class="container mx-auto px-4">
    <div class="bg-gray-100 rounded-lg p-8 md:p-12 text-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Soar with Us?</h2>
      <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
        Discover the thrill of hang gliding with Power Hang Glider. Contact us today to book your adventure.
      </p>
      <a href="#" class="inline-block bg-amber-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-amber-700 transition-colors">
        Contact Us Today
      </a>
    </div>
  </div>
</section>

@include('common.footer')
@endsection