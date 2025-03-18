@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include("common.header")
<body class="bg-gray-50">
  @include("common.nav")
  
  <!-- Hero Section with Parallax Effect -->
  <div class="relative overflow-hidden bg-gradient-to-b from-blue-900 to-blue-700 text-white py-24">
    <div class="absolute inset-0 z-0">
      <img src="https://images.unsplash.com/photo-1506459225024-1428097a7e18?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
           alt="Hang gliding background" 
           class="w-full h-full object-cover opacity-20">
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
      <span class="inline-block px-4 py-1 bg-blue-500 bg-opacity-70 rounded-full text-sm font-semibold mb-4">Begin Your Adventure</span>
      <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Beginner Power Hang Gliding Training</h1>
      <p class="text-lg md:text-xl text-blue-100 max-w-3xl mx-auto mb-8">Start your journey into the exciting world of power hang gliding with our comprehensive beginner training program. Learn from experienced instructors in a safe and supportive environment.</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#training-phases" class="px-8 py-3 bg-white text-blue-700 rounded-full font-bold hover:bg-blue-50 transition-colors">Explore Training</a>
        <a href="/booking" class="px-8 py-3 bg-blue-500 text-white rounded-full font-bold hover:bg-blue-600 transition-colors">Book Now</a>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg> -->
    </div>
  </div>

  <!-- Main Content -->
  <div class="py-12 bg-white">
    <div class="container mx-auto px-4">
      
      <!-- Introduction Section with Animation -->
      <div class="mb-20" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Getting Started with Power Hang Gliding</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
        <div class="flex flex-col md:flex-row items-center gap-8">
          <div class="md:w-1/2" data-aos="fade-right" data-aos-delay="200">
            <p class="text-lg text-gray-700 mb-4">Power hang gliding combines the freedom of traditional hang gliding with the reliability and control of a motor. This makes it an ideal entry point for beginners who want to experience the thrill of flight with added safety and stability.</p>
            <p class="text-lg text-gray-700 mb-6">Our beginner training program is designed to take you from zero experience to your first solo flight. We focus on safety, proper technique, and building confidence in the air.</p>
            <div class="flex flex-wrap gap-4 mb-4">
              <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <span class="text-gray-700">Safety First Approach</span>
              </div>
              <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                  </svg>
                </div>
                <span class="text-gray-700">Personalized Training</span>
              </div>
            </div>
          </div>
          <div class="md:w-1/2" data-aos="fade-left" data-aos-delay="200">
            <div class="rounded-lg overflow-hidden shadow-xl transform hover:scale-105 transition-transform duration-300">
              <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                   alt="Instructor teaching a beginner about power hang gliding" 
                   class="w-full h-auto">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Training Phases with Interactive Elements -->
      <div class="mb-20" id="training-phases" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Training Phases</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
        <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto mb-12">Our comprehensive training program is divided into three phases, each designed to build your skills progressively and safely.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Phase 1 -->
          <div class="bg-white rounded-lg p-6 shadow-lg border border-gray-100 transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
            <div class="rounded-lg overflow-hidden mb-6 h-48 relative group">
              <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                   alt="Ground training for power hang gliding" 
                   class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-blue-900 bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="text-white font-bold text-lg">2-3 Days</span>
              </div>
            </div>
            <div class="flex items-center mb-4">
              <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                <span class="font-bold text-blue-600">1</span>
              </div>
              <h3 class="text-xl font-bold">Ground School</h3>
            </div>
            <p class="text-gray-700 mb-4">Learn the fundamentals of power hang gliding, including equipment familiarization, weather assessment, and basic aerodynamics. This classroom and hands-on ground training builds the foundation for your flying journey.</p>
            <ul class="text-gray-700 space-y-2 mb-4">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Equipment knowledge
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Weather theory
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Safety procedures
              </li>
            </ul>
          </div>
          
          <!-- Phase 2 -->
          <div class="bg-white rounded-lg p-6 shadow-lg border border-gray-100 transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
            <div class="rounded-lg overflow-hidden mb-6 h-48 relative group">
              <img src="https://images.unsplash.com/photo-1506459225024-1428097a7e18?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                   alt="Tandem flights with instructor" 
                   class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-blue-900 bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="text-white font-bold text-lg">3-5 Days</span>
              </div>
            </div>
            <div class="flex items-center mb-4">
              <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                <span class="font-bold text-blue-600">2</span>
              </div>
              <h3 class="text-xl font-bold">Tandem Flights</h3>
            </div>
            <p class="text-gray-700 mb-4">Experience the thrill of flight with an instructor. These tandem flights allow you to feel the controls and understand the sensations of flying while under expert supervision.</p>
            <ul class="text-gray-700 space-y-2 mb-4">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Basic control techniques
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Launch and landing observation
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                In-flight communication
              </li>
            </ul>
          </div>
          
          <!-- Phase 3 -->
          <div class="bg-white rounded-lg p-6 shadow-lg border border-gray-100 transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="300">
            <div class="rounded-lg overflow-hidden mb-6 h-48 relative group">
              <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                   alt="Solo flight training" 
                   class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-blue-900 bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="text-white font-bold text-lg">5-10 Days</span>
              </div>
            </div>
            <div class="flex items-center mb-4">
              <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                <span class="font-bold text-blue-600">3</span>
              </div>
              <h3 class="text-xl font-bold">Solo Training</h3>
            </div>
            <p class="text-gray-700 mb-4">Progress to controlled solo flights under close supervision. Starting with short hops and gradually advancing to longer flights, you'll build confidence and skill with each session.</p>
            <ul class="text-gray-700 space-y-2 mb-4">
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Independent takeoffs
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Flight maneuvers practice
              </li>
              <li class="flex items-start">
                <svg class="h-5 w-5 text-blue-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Safe landing techniques
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Training Schedule Section (New) -->
      <div class="mb-20 bg-blue-50 rounded-xl p-8" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Training Schedule</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
        <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto mb-8">Our training programs run throughout the year, with sessions scheduled based on weather conditions and student availability.</p>
        
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-blue-600 text-white">
              <tr>
                <th class="py-3 px-4 text-left">Program</th>
                <th class="py-3 px-4 text-left">Duration</th>
                <th class="py-3 px-4 text-left">Frequency</th>
                <th class="py-3 px-4 text-left">Best Season</th>
                <th class="py-3 px-4 text-left">Price</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr class="hover:bg-gray-50">
                <td class="py-3 px-4 font-medium">Weekend Intro</td>
                <td class="py-3 px-4">2 days</td>
                <td class="py-3 px-4">Every weekend</td>
                <td class="py-3 px-4">Spring/Fall</td>
                <td class="py-3 px-4">$399</td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="py-3 px-4 font-medium">Basic Certification</td>
                <td class="py-3 px-4">10 days</td>
                <td class="py-3 px-4">Monthly</td>
                <td class="py-3 px-4">All year</td>
                <td class="py-3 px-4">$1,499</td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="py-3 px-4 font-medium">Intensive Course</td>
                <td class="py-3 px-4">14 days</td>
                <td class="py-3 px-4">Bi-monthly</td>
                <td class="py-3 px-4">Summer</td>
                <td class="py-3 px-4">$2,199</td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="py-3 px-4 font-medium">Private Lessons</td>
                <td class="py-3 px-4">Flexible</td>
                <td class="py-3 px-4">On demand</td>
                <td class="py-3 px-4">All year</td>
                <td class="py-3 px-4">$199/hour</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="mt-6 text-center">
          <p class="text-sm text-gray-600 italic">* Prices include equipment rental and insurance. Weather-related cancellations are rescheduled at no additional cost.</p>
        </div>
      </div>
      
      <!-- Equipment Section with Tabs -->
      <div class="mb-20" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Training Equipment</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
        
        <div class="flex flex-col md:flex-row items-center gap-8">
          <div class="md:w-1/2" data-aos="fade-right" data-aos-delay="200">
            <div class="rounded-lg overflow-hidden shadow-xl">
              <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                   alt="Power hang gliding equipment" 
                   class="w-full h-auto">
            </div>
          </div>
          <div class="md:w-1/2" data-aos="fade-left" data-aos-delay="200">
            <div x-data="{ activeTab: 'gliders' }">
              <div class="flex border-b border-gray-200 mb-6">
                <button @click="activeTab = 'gliders'" :class="{ 'border-b-2 border-blue-600 text-blue-600': activeTab === 'gliders' }" class="px-4 py-2 font-medium">Gliders</button>
                <button @click="activeTab = 'motors'" :class="{ 'border-b-2 border-blue-600 text-blue-600': activeTab === 'motors' }" class="px-4 py-2 font-medium">Motors</button>
                <button @click="activeTab = 'safety'" :class="{ 'border-b-2 border-blue-600 text-blue-600': activeTab === 'safety' }" class="px-4 py-2 font-medium">Safety Gear</button>
              </div>
              
              <div x-show="activeTab === 'gliders'">
                <h3 class="text-xl font-bold mb-4">State-of-the-Art Training Gliders</h3>
                <p class="text-lg text-gray-700 mb-4">Our training facility uses the latest power hang gliders specifically designed for beginners. These gliders feature:</p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2">
                  <li>Enhanced stability systems for safer learning</li>
                  <li>Reliable motors with simple controls</li>
                  <li>Comfortable harnesses for extended training sessions</li>
                  <li>Dual control systems for instructor intervention when needed</li>
                  <li>Modern safety features including reserve parachutes</li>
                </ul>
              </div>
              
              <div x-show="activeTab === 'motors'" style="display: none;">
                <h3 class="text-xl font-bold mb-4">Reliable Power Systems</h3>
                <p class="text-lg text-gray-700 mb-4">Our power hang gliders are equipped with top-quality motors that provide:</p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2">
                  <li>Consistent power output for predictable performance</li>
                  <li>Fuel-efficient operation for longer flight times</li>
                  <li>Reduced noise levels for a more enjoyable experience</li>
                  <li>Easy starting mechanisms for beginner pilots</li>
                  <li>Backup systems for added safety</li>
                </ul>
                
                <div class="mt-6">
                  <h4 class="font-bold text-lg mb-3">Motor Specifications</h4>
                  <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="grid grid-cols-2 gap-4">
                      <div>
                        <p class="font-medium text-gray-700">Engine Type:</p>
                        <p>2-stroke & 4-stroke options</p>
                      </div>
                      <div>
                        <p class="font-medium text-gray-700">Power Output:</p>
                        <p>15-25 HP (training models)</p>
                      </div>
                      <div>
                        <p class="font-medium text-gray-700">Fuel Capacity:</p>
                        <p>3-5 gallons (11-19 liters)</p>
                      </div>
                      <div>
                        <p class="font-medium text-gray-700">Flight Duration:</p>
                        <p>2-4 hours typical</p>
                      </div>
                      <div>
                        <p class="font-medium text-gray-700">Starting System:</p>
                        <p>Electric & manual pull-start</p>
                      </div>
                      <div>
                        <p class="font-medium text-gray-700">Weight:</p>
                        <p>45-65 lbs (20-30 kg)</p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="mt-6">
                  <h4 class="font-bold text-lg mb-3">Motor Maintenance</h4>
                  <p class="text-gray-700 mb-3">All our training motors are meticulously maintained according to manufacturer specifications. Students learn basic maintenance procedures as part of the training program, including:</p>
                  <ul class="list-disc pl-6 text-gray-700 space-y-1">
                    <li>Pre-flight engine checks</li>
                    <li>Proper fuel mixing (for 2-stroke engines)</li>
                    <li>Air filter cleaning and replacement</li>
                    <li>Spark plug inspection and replacement</li>
                    <li>Propeller balancing and care</li>
                  </ul>
                </div>
              </div>
              
              <div x-show="activeTab === 'safety'" style="display: none;">
                <h3 class="text-xl font-bold mb-4">Comprehensive Safety Equipment</h3>
                <p class="text-lg text-gray-700 mb-4">Your safety is our top priority. All students are provided with:</p>
                <ul class="list-disc pl-6 text-gray-700 space-y-2">
                  <li>Certified helmets with integrated communication systems</li>
                  <li>Full-body harnesses with impact protection</li>
                  <li>Reserve parachutes that are regularly inspected and repacked</li>
                  <li>GPS tracking devices for all training flights</li>
                  <li>Weather monitoring equipment for real-time conditions assessment</li>
                </ul>
                
                <div class="mt-6 space-y-6">
                  <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-500">
                    <h4 class="font-bold text-lg mb-2 flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      Emergency Procedures Training
                    </h4>
                    <p class="text-gray-700">Every student receives comprehensive training in emergency procedures, including reserve parachute deployment, emergency landing techniques, and communication protocols. We practice these procedures regularly throughout the training program.</p>
                  </div>
                  
                  <div>
                    <h4 class="font-bold text-lg mb-3">Safety Gear Details</h4>
                    <div class="space-y-4">
                      <div class="flex items-start">
                        <div class="bg-blue-100 rounded-full p-2 mr-3 mt-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                          </svg>
                        </div>
                        <div>
                          <h5 class="font-medium">Helmets</h5>
                          <p class="text-gray-700">Full-face composite helmets with integrated radio communication systems, allowing constant contact with instructors during all phases of flight.</p>
                        </div>
                      </div>
                      
                      <div class="flex items-start">
                        <div class="bg-blue-100 rounded-full p-2 mr-3 mt-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                          </svg>
                        </div>
                        <div>
                          <h5 class="font-medium">Harnesses</h5>
                          <p class="text-gray-700">Ergonomic full-body harnesses with adjustable support systems, impact-absorbing materials, and multiple attachment points for secure connection to the glider.</p>
                        </div>
                      </div>
                      
                      <div class="flex items-start">
                        <div class="bg-blue-100 rounded-full p-2 mr-3 mt-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                          </svg>
                        </div>
                        <div>
                          <h5 class="font-medium">Reserve Parachutes</h5>
                          <p class="text-gray-700">Quick-deploy emergency parachutes that are inspected and repacked by certified technicians every six months. Each student practices deployment procedures on a ground simulator.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Instructor Profiles (New) -->
      <div class="mb-20" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2">Meet Your Instructors</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
        <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto mb-12">Learn from our team of certified instructors with years of experience in power hang gliding.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white rounded-lg overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="h-64 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1507041957456-9c397ce39c97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80" 
                   alt="Instructor Mike Johnson" 
                   class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Mike Johnson</h3>
              <p class="text-blue-600 font-medium mb-3">Head Instructor</p>
              <p class="text-gray-700 mb-4">With over 15 years of experience and 3,000+ flight hours, Mike specializes in beginner training and safety procedures.</p>
              <div class="flex items-center text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Certified Master Instructor</span>
              </div>
            </div>
          </div>
          
          <div class="bg-white rounded-lg overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="h-64 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1506459225024-1428097a7e18?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80" 
                   alt="Instructor Sarah Williams" 
                   class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Sarah Williams</h3>
              <p class="text-blue-600 font-medium mb-3">Safety Specialist</p>
              <p class="text-gray-700 mb-4">Former competitive pilot with a focus on teaching proper technique and building student confidence.</p>
              <div class="flex items-center text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Advanced Safety Certification</span>
              </div>
            </div>
          </div>
          
          <div class="bg-white rounded-lg overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="300">
            <div class="h-64 overflow-hidden">
              <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80" 
                   alt="Instructor David Chen" 
                   class="w-full h-full object-cover">
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">David Chen</h3>
              <p class="text-blue-600 font-medium mb-3">Technical Specialist</p>
              <p class="text-gray-700 mb-4">Mechanical engineer with expertise in power systems and equipment maintenance. Specializes in technical aspects of flying.</p>
              <div class="flex items-center text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Certified Equipment Technician</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  @include("common.footer")
  
  <script>
    // Add any JavaScript needed for the page here
    document.addEventListener('DOMContentLoaded', function() {
      // Example: Image lightbox functionality could be added here
    });
  </script>
</body>
</html>
@endsection