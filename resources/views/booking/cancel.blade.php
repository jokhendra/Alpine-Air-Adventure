@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-6">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Booking Cancelled</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Your booking has been cancelled. No payment has been processed.
                </p>
                <div class="space-y-4">
                    <a href="/" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-amber-600 hover:bg-amber-700 transition-colors duration-200">
                        Return to Home
                    </a>
                    <button 
                        onclick="window.history.back()" 
                        class="block w-full px-6 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200 mt-4"
                    >
                        Try Again
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 