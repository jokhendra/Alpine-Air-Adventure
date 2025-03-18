@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include("common.header")
<body class="bg-gray-50">
  @include("common.nav")
  
  <!-- Hero Section with Parallax Effect -->
  <div class="relative overflow-hidden bg-gradient-to-b from-indigo-900 to-indigo-700 text-white py-24">
    <div class="absolute inset-0 z-0">
      <img src="https://images.unsplash.com/photo-1506459225024-1428097a7e18?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
           alt="Advanced hang gliding background" 
           class="w-full h-full object-cover opacity-20">
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
      <span class="inline-block px-4 py-1 bg-indigo-500 bg-opacity-70 rounded-full text-sm font-semibold mb-4">Elevate Your Skills</span>
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Advanced Power Hang Gliding Training</h1>
      <p class="text-lg md:text-xl text-indigo-100 max-w-3xl mx-auto mb-8">Take your power hang gliding skills to the next level with our advanced training programs. Master complex maneuvers, learn cross-country techniques, and become an expert pilot.</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#advanced-courses" class="px-8 py-3 bg-white text-indigo-700 rounded-full font-bold hover:bg-indigo-50 transition-colors">Explore Courses</a>
        <a href="/booking" class="px-8 py-3 bg-indigo-500 text-white rounded-full font-bold hover:bg-indigo-600 transition-colors">Book Now</a>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </div>
  </div>

  <!-- Main Content -->
  <div class="py-12 bg-white">
    <div class="container mx-auto px-4">
      
      <!-- Introduction Section -->
      <div class="mb-20" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Advanced Power Hang Gliding</h2>
        <div class="w-24 h-1 bg-indigo-600 mx-auto mb-8"></div>
        <div class="flex flex-col md:flex-row items-center gap-8">
          <div class="md:w-1/2" data-aos="fade-right" data-aos-delay="200">
            <p class="text-lg text-gray-700 mb-4">Our advanced training programs are designed for pilots who have mastered the basics and are ready to push their skills to new heights. Whether you're looking to compete professionally, undertake long cross-country flights, or simply perfect your technique, our expert instructors will guide you through the next stage of your flying journey.</p>
            <p class="text-lg text-gray-700 mb-6">Advanced training focuses on precision control, complex maneuvers, navigation skills, and advanced weather assessment. You'll learn to handle challenging conditions with confidence and safety.</p>
            <div class="flex flex-wrap gap-4 mb-4">
              <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <span class="text-gray-700">Performance-Focused</span>
              </div>
              <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                  </svg>
                </div>
                <span class="text-gray-700">Expert Instruction</span>
              </div>
            </div>
          </div>
          <div class="md:w-1/2" data-aos="fade-left" data-aos-delay="200">
            <div class="rounded-lg overflow-hidden shadow-xl transform hover:scale-105 transition-transform duration-300">
              <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                   alt="Advanced power hang gliding maneuvers" 
                   class="w-full h-auto">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Prerequisites Section -->
      <div class="mb-20 bg-gray-50 rounded-xl p-8" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Prerequisites</h2>
        <div class="w-24 h-1 bg-indigo-600 mx-auto mb-8"></div>
        <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto mb-8">Before enrolling in our advanced training programs, pilots should meet the following requirements:</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white rounded-lg p-6 shadow-md" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold">Certification</h3>
            </div>
            <p class="text-gray-700">Hold a valid Beginner or Intermediate Power Hang Gliding certification with a minimum of 50 logged flight hours.</p>
          </div>
          
          <div class="bg-white rounded-lg p-6 shadow-md" data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold">Experience</h3>
            </div>
            <p class="text-gray-700">Demonstrated proficiency in basic maneuvers, takeoffs, and landings in various conditions. Experience with at least 20 solo flights.</p>
          </div>
          
          <div class="bg-white rounded-lg p-6 shadow-md" data-aos="fade-up" data-aos-delay="300">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-bold">Knowledge</h3>
            </div>
            <p class="text-gray-700">Thorough understanding of weather patterns, aerodynamics, and emergency procedures. Ability to perform pre-flight equipment checks independently.</p>
          </div>
        </div>
        
        <div class="mt-8 text-center">
          <p class="text-gray-700">Not sure if you're ready? <a href="/skill-assessment" class="text-indigo-600 font-medium hover:underline">Schedule a skill assessment</a> with one of our instructors.</p>
        </div>
      </div>
      
      <!-- Advanced Courses Section -->
      <div class="mb-20" id="advanced-courses" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Advanced Training Courses</h2>
        <div class="w-24 h-1 bg-indigo-600 mx-auto mb-8"></div>
        <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto mb-12">Choose from our specialized advanced training modules to focus on the skills that matter most to you.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Course 1 -->
          <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="100">
            <div class="h-64 overflow-hidden relative">
              <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                   alt="Advanced maneuvers training" 
                   class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                <div class="p-6">
                  <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium">5-Day Course</span>
                  <h3 class="text-2xl font-bold text-white mt-2">Advanced Maneuvers</h3>
                </div>
              </div>
            </div>
            <div class="p-6">
              <p class="text-gray-700 mb-4">Master complex flying techniques including wingovers, spirals, and precision landings. Learn to handle your glider with confidence in challenging conditions.</p>
              <div class="space-y-3 mb-6">
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Advanced turning techniques</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Precision speed control</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Spot landing practice</span>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-2xl font-bold text-gray-900">$1,299</span>
                <a href="/booking" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Book Course</a>
              </div>
            </div>
          </div>
          
          <!-- Course 2 -->
          <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="200">
            <div class="h-64 overflow-hidden relative">
              <img src="https://images.unsplash.com/photo-1506459225024-1428097a7e18?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                   alt="Cross-country flying training" 
                   class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                <div class="p-6">
                  <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium">7-Day Course</span>
                  <h3 class="text-2xl font-bold text-white mt-2">Cross-Country Flying</h3>
                </div>
              </div>
            </div>
            <div class="p-6">
              <p class="text-gray-700 mb-4">Develop the skills needed for long-distance flights. Learn advanced navigation, thermal identification, route planning, and weather interpretation.</p>
              <div class="space-y-3 mb-6">
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>GPS and navigation systems</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Thermal hunting and centering</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Flight planning and airspace rules</span>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-2xl font-bold text-gray-900">$1,899</span>
                <a href="/booking" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Book Course</a>
              </div>
            </div>
          </div>
          
          <!-- Course 3 -->
          <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="300">
            <div class="h-64 overflow-hidden relative">
              <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                   alt="Competition training" 
                   class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                <div class="p-6">
                  <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium">10-Day Course</span>
                  <h3 class="text-2xl font-bold text-white mt-2">Competition Preparation</h3>
                </div>
              </div>
            </div>
            <div class="p-6">
              <p class="text-gray-700 mb-4">Train for competitive power hang gliding events. Focus on speed runs, precision tasks, and competition strategies with guidance from experienced competitors.</p>
              <div class="space-y-3 mb-6">
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Competition rules and scoring</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Tactical decision making</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Mock competition practice</span>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-2xl font-bold text-gray-900">$2,499</span>
                <a href="/booking" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Book Course</a>
              </div>
            </div>
          </div>
          
          <!-- Course 4 -->
          <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-gray-100" data-aos="fade-up" data-aos-delay="400">
            <div class="h-64 overflow-hidden relative">
              <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                   alt="Mountain flying training" 
                   class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end">
                <div class="p-6">
                  <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium">6-Day Course</span>
                  <h3 class="text-2xl font-bold text-white mt-2">Mountain Flying</h3>
                </div>
              </div>
            </div>
            <div class="p-6">
              <p class="text-gray-700 mb-4">Learn specialized techniques for flying in mountainous terrain. Master ridge soaring, valley winds, and high-altitude operations in breathtaking settings.</p>
              <div class="space-y-3 mb-6">
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Mountain weather patterns</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>Ridge soaring techniques</span>
                </div>
                <div class="flex items-start">
                  <svg class="h-5 w-5 text-indigo-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span>High-altitude emergency procedures</span>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-2xl font-bold text-gray-900">$1,699</span>
                <a href="/booking" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">Book Course</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Advanced Equipment Section -->
      <div class="mb-20 bg-gray-50 rounded-xl p-8" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Advanced Equipment</h2>
        <div class="w-24 h-1 bg-indigo-600 mx-auto mb-8"></div>
        
        <div class="flex flex-col md:flex-row items-center gap-8">
          <div class="md:w-1/2" data-aos="fade-right" data-aos-delay="200">
            <div class="rounded-lg overflow-hidden shadow-xl">
              <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                   alt="Advanced power hang gliding equipment" 
                   class="w-full h-auto">
            </div>
          </div>
          <div class="md:w-1/2" data-aos="fade-left" data-aos-delay="200">
            <h3 class="text-2xl font-bold mb-4">Performance Gliders & Equipment</h3>
            <p class="text-lg text-gray-700 mb-6">Our advanced training programs utilize high-performance power hang gliders that offer superior handling, speed range, and glide ratio. These advanced gliders allow you to execute complex maneuvers and achieve greater distances.</p>
            
            <div class="space-y-4">
              <div class="flex items-start">
                <div class="bg-indigo-100 rounded-full p-2 mr-3 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">High-Performance Wings</h4>
                  <p class="text-gray-700">Advanced gliders with improved aerodynamics, higher aspect ratios, and responsive handling characteristics.</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="bg-indigo-100 rounded-full p-2 mr-3 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Enhanced Power Systems</h4>
                  <p class="text-gray-700">More powerful and efficient motors with electronic fuel injection, variable pitch propellers, and advanced throttle control.</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <div class="bg-indigo-100 rounded-full p-2 mr-3 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900">Advanced Instrumentation</h4>
                  <p class="text-gray-700">Digital variometers, GPS navigation systems, airspeed indicators, and altimeters for precise flight data and navigation.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Testimonials Section -->
      <div class="mb-20" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Pilot Testimonials</h2>
        <div class="w-24 h-1 bg-indigo-600 mx-auto mb-8"></div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center mb-4">
              <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                     alt="Testimonial author" 
                     class="h-full w-full object-cover">
              </div>
              <div>
                <h3 class="text-xl font-bold">John Doe</h3>
                <p class="text-gray-700">Advanced Power Hang Glider Pilot</p>
              </div>
            </div>
            <p class="text-gray-700 mt-4">"The advanced training programs were incredibly beneficial. I learned so much and my skills improved significantly. The instructors were knowledgeable and supportive throughout the entire process."</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100" data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center mb-4">
              <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                     alt="Testimonial author" 
                     class="h-full w-full object-cover">
              </div>
              <div>
                <h3 class="text-xl font-bold">Jane Smith</h3>
                <p class="text-gray-700">Advanced Power Hang Glider Pilot</p>
              </div>
            </div>
            <p class="text-gray-700 mt-4">"The advanced training programs were incredibly beneficial. I learned so much and my skills improved significantly. The instructors were knowledgeable and supportive throughout the entire process."</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100" data-aos="fade-up" data-aos-delay="300">
            <div class="flex items-center mb-4">
              <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                     alt="Testimonial author" 
                     class="h-full w-full object-cover">
              </div>
              <div>
                <h3 class="text-xl font-bold">Bob Johnson</h3>
                <p class="text-gray-700">Advanced Power Hang Glider Pilot</p>
              </div>
            </div>
            <p class="text-gray-700 mt-4">"The advanced training programs were incredibly beneficial. I learned so much and my skills improved significantly. The instructors were knowledgeable and supportive throughout the entire process."</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include("common.footer")
</body>
</html>
@endsection