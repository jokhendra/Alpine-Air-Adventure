@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
@include('common.header')
<body>
  @include("common.nav")
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col">
      <div class="w-full">
        <h1 class="text-3xl font-bold mt-8 mb-6">Hang Glider Products</h1>
        
        <div class="flex flex-col md:flex-row mt-6 gap-6">
          <!-- Featured Product -->
          <div class="w-full md:w-2/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
              <img src="https://images.unsplash.com/photo-1534710961216-75c88202f43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" class="w-full h-auto object-cover" alt="Power Hang Glider Pro">
              <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">Power Hang Glider Pro X500</h2>
                <p class="text-gray-700 mb-4">Our flagship powered hang glider featuring advanced aerodynamics, lightweight construction, and reliable power system.</p>
                <div class="flex justify-between items-center">
                  <h3 class="text-xl font-bold text-blue-600">$8,999</h3>
                  <a href="product-detail-1.html" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Details</a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Sidebar -->
          <div class="w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
              <div class="bg-blue-600 text-white px-4 py-3 font-bold">
                Why Choose Our Hang Gliders?
              </div>
              <ul class="divide-y divide-gray-200">
                <li class="px-4 py-3">Premium materials for durability</li>
                <li class="px-4 py-3">Fuel-efficient engines</li>
                <li class="px-4 py-3">Easy to transport and assemble</li>
                <li class="px-4 py-3">Comprehensive training available</li>
                <li class="px-4 py-3">Industry-leading warranty</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Product Listing -->
        <h2 class="text-2xl font-bold mt-12 mb-6">Our Power Hang Glider Collection</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Product 1 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <img src="https://images.unsplash.com/photo-1600608001869-b4353b2f5da2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Beginner Power Hang Glider">
            <div class="p-6 flex-grow">
              <h3 class="text-xl font-bold mb-2">Explorer 250</h3>
              <p class="text-gray-700 mb-4">Perfect for beginners with stable flight characteristics and easy handling.</p>
              <p class="text-blue-600 font-bold">$5,499</p>
            </div>
            <div class="px-6 pb-4">
              <a href="product-detail-2.html" class="block w-full text-center border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 px-4 rounded">View Details</a>
            </div>
          </div>
          
          <!-- Product 2 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <img src="https://images.unsplash.com/photo-1502847128942-91d78ff2a86c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Intermediate Power Hang Glider">
            <div class="p-6 flex-grow">
              <h3 class="text-xl font-bold mb-2">Voyager 350</h3>
              <p class="text-gray-700 mb-4">Intermediate model with enhanced performance and extended range capabilities.</p>
              <p class="text-blue-600 font-bold">$6,799</p>
            </div>
            <div class="px-6 pb-4">
              <a href="product-detail-3.html" class="block w-full text-center border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 px-4 rounded">View Details</a>
            </div>
          </div>
          
          <!-- Product 3 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <img src="https://images.unsplash.com/photo-1531644288963-3f6df5f0f7f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="w-full h-48 object-cover" alt="Advanced Power Hang Glider">
            <div class="p-6 flex-grow">
              <h3 class="text-xl font-bold mb-2">Falcon 450</h3>
              <p class="text-gray-700 mb-4">Advanced model for experienced pilots seeking maximum performance and maneuverability.</p>
              <p class="text-blue-600 font-bold">$7,899</p>
            </div>
            <div class="px-6 pb-4">
              <a href="product-detail-4.html" class="block w-full text-center border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-2 px-4 rounded">View Details</a>
            </div>
          </div>
        </div>
        
        <!-- Accessories Section -->
        <h2 class="text-2xl font-bold mt-12 mb-6">Essential Accessories</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
          <!-- Accessory 1 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="w-full h-40 object-cover" alt="Flying Helmet">
            <div class="p-4">
              <h4 class="text-lg font-bold mb-2">Pro Flying Helmet</h4>
              <p class="text-blue-600 mb-3">$299</p>
              <a href="accessory-detail-1.html" class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-bold py-1 px-3 rounded">View</a>
            </div>
          </div>
          
          <!-- Accessory 2 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="w-full h-40 object-cover" alt="Harness">
            <div class="p-4">
              <h4 class="text-lg font-bold mb-2">Premium Harness</h4>
              <p class="text-blue-600 mb-3">$549</p>
              <a href="accessory-detail-2.html" class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-bold py-1 px-3 rounded">View</a>
            </div>
          </div>
          
          <!-- Accessory 3 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <img src="https://images.unsplash.com/photo-1611242320536-f12d3541249b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="w-full h-40 object-cover" alt="Variometer">
            <div class="p-4">
              <h4 class="text-lg font-bold mb-2">Digital Variometer</h4>
              <p class="text-blue-600 mb-3">$399</p>
              <a href="accessory-detail-3.html" class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-bold py-1 px-3 rounded">View</a>
            </div>
          </div>
          
          <!-- Accessory 4 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-full">
            <img src="https://images.unsplash.com/photo-1596460107916-430662021049?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" class="w-full h-40 object-cover" alt="Transport Case">
            <div class="p-4">
              <h4 class="text-lg font-bold mb-2">Transport Case</h4>
              <p class="text-blue-600 mb-3">$799</p>
              <a href="accessory-detail-4.html" class="inline-block border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white text-sm font-bold py-1 px-3 rounded">View</a>
            </div>
          </div>
        </div>
        
        <!-- Call to Action -->
        <div class="mt-12 mb-12">
          <div class="bg-gray-100 rounded-lg shadow-md p-8 text-center">
            <h3 class="text-2xl font-bold mb-2">Ready to Experience the Freedom of Flight?</h3>
            <p class="text-lg text-gray-700 mb-4">Contact our team of experts for personalized advice and special offers.</p>
            <a href="contact.html" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg">Contact Us Today</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include("common.footer")
</body>
</html>
@endsection