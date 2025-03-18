<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\BookingController;

// Health Check Route for Railway
Route::get('/health', function () {
    return response()->json([
        'status' => 'up',
        'timestamp' => now()->toIso8601String(),
        'environment' => app()->environment(),
        'php_version' => PHP_VERSION
    ], 200);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'contact']);

Route::get('/gallery', function () {
    return view('gallery');
});

// Booking routes without auth middleware
Route::get('/booking', function() {
    return view('booking');
})->name('booking');

Route::post('/booking/preview', [BookingController::class, 'preview'])->name('booking.preview');
Route::get('/booking/success', [BookingController::class, 'success'])->name('booking.success');
Route::get('/booking/cancel', function () {
    return view('booking.cancel');
})->name('booking.cancel');

Route::prefix('training')->group(function() {
    Route::get('/beginner', function() {
        return view('beginner_training');
    });
    
    Route::get('/advanced', function() {
        return view('advanced_training');
    });
    
    // You can add more training routes here
    Route::get('/certification', function() {
        return view('certification_training');
    });
});

Route::prefix('product')->group(function(){
    Route::get('/hang-glider',function(){
        return view("product_hang_glider");
    });
});

Route::get('/weather', function() {
    // Dummy data for weather display
    $data = [
        // Current conditions
        'currentTemp' => 22,
        'weatherDescription' => 'Partly Cloudy',
        'feelsLike' => 24,
        'windSpeed' => 15,
        'windDirection' => 'NW',
        'windGusts' => 22,
        'visibility' => 12,
        'humidity' => 65,
        
        // Flight safety
        'flightSafety' => 'Moderate',
        'windSafetyColor' => 'yellow',
        'windSafetyPercent' => 65,
        'visibilitySafetyColor' => 'green',
        'visibilitySafetyPercent' => 90,
        'thermalSafetyColor' => 'yellow',
        'thermalSafetyPercent' => 70,
        'hasWarning' => true,
        'warningClass' => 'bg-yellow-100 text-yellow-800',
        'warningMessage' => 'Moderate wind gusts expected in the afternoon. Exercise caution.',
        
        // Hourly forecast
        'hourlyForecast' => [
            [
                'time' => '10:00',
                'temp' => 20,
                'wind' => 12,
                'gusts' => 18,
                'safety' => 'Good'
            ],
            [
                'time' => '11:00',
                'temp' => 21,
                'wind' => 14,
                'gusts' => 20,
                'safety' => 'Good'
            ],
            [
                'time' => '12:00',
                'temp' => 22,
                'wind' => 15,
                'gusts' => 22,
                'safety' => 'Moderate'
            ],
            [
                'time' => '13:00',
                'temp' => 23,
                'wind' => 17,
                'gusts' => 25,
                'safety' => 'Moderate'
            ],
            [
                'time' => '14:00',
                'temp' => 24,
                'wind' => 18,
                'gusts' => 28,
                'safety' => 'Moderate'
            ],
            [
                'time' => '15:00',
                'temp' => 24,
                'wind' => 20,
                'gusts' => 32,
                'safety' => 'Poor'
            ],
        ],
        
        // Launch sites
        'launchSites' => [
            [
                'name' => 'Eagle Peak',
                'wind' => 14,
                'gusts' => 20,
                'direction' => 'NW',
                'status' => 'Good'
            ],
            [
                'name' => 'Mountain Ridge',
                'wind' => 18,
                'gusts' => 26,
                'direction' => 'N',
                'status' => 'Moderate'
            ],
            [
                'name' => 'Coastal Cliffs',
                'wind' => 22,
                'gusts' => 32,
                'direction' => 'NE',
                'status' => 'Poor'
            ],
            [
                'name' => 'Valley View',
                'wind' => 12,
                'gusts' => 18,
                'direction' => 'W',
                'status' => 'Good'
            ],
        ],
        
        // 7-day forecast
        'dailyForecast' => [
            [
                'day' => 'Today',
                'date' => date('M d'),
                'icon' => 'partly-cloudy',
                'highTemp' => 24,
                'lowTemp' => 18,
                'windSpeed' => 15,
                'windGusts' => 22,
                'precipitation' => 10,
                'description' => 'Partly cloudy with moderate winds',
                'safety' => 'Moderate'
            ],
            [
                'day' => 'Tomorrow',
                'date' => date('M d', strtotime('+1 day')),
                'icon' => 'sunny',
                'highTemp' => 26,
                'lowTemp' => 19,
                'windSpeed' => 12,
                'windGusts' => 18,
                'precipitation' => 0,
                'description' => 'Clear skies with light winds',
                'safety' => 'Good'
            ],
            [
                'day' => date('D', strtotime('+2 day')),
                'date' => date('M d', strtotime('+2 day')),
                'icon' => 'sunny',
                'highTemp' => 27,
                'lowTemp' => 20,
                'windSpeed' => 10,
                'windGusts' => 15,
                'precipitation' => 0,
                'description' => 'Sunny and calm',
                'safety' => 'Good'
            ],
            [
                'day' => date('D', strtotime('+3 day')),
                'date' => date('M d', strtotime('+3 day')),
                'icon' => 'cloudy',
                'highTemp' => 25,
                'lowTemp' => 19,
                'windSpeed' => 18,
                'windGusts' => 25,
                'precipitation' => 20,
                'description' => 'Increasing clouds with stronger winds',
                'safety' => 'Moderate'
            ],
            [
                'day' => date('D', strtotime('+4 day')),
                'date' => date('M d', strtotime('+4 day')),
                'icon' => 'rainy',
                'highTemp' => 22,
                'lowTemp' => 17,
                'windSpeed' => 22,
                'windGusts' => 35,
                'precipitation' => 60,
                'description' => 'Rain with strong gusts',
                'safety' => 'Poor'
            ],
            [
                'day' => date('D', strtotime('+5 day')),
                'date' => date('M d', strtotime('+5 day')),
                'icon' => 'partly-cloudy',
                'highTemp' => 23,
                'lowTemp' => 16,
                'windSpeed' => 16,
                'windGusts' => 24,
                'precipitation' => 30,
                'description' => 'Clearing with moderate winds',
                'safety' => 'Moderate'
            ],
            [
                'day' => date('D', strtotime('+6 day')),
                'date' => date('M d', strtotime('+6 day')),
                'icon' => 'sunny',
                'highTemp' => 25,
                'lowTemp' => 18,
                'windSpeed' => 12,
                'windGusts' => 18,
                'precipitation' => 10,
                'description' => 'Mostly sunny with light winds',
                'safety' => 'Good'
            ],
        ]
    ];
    
    return view('weather', $data);
});

Route::middleware('api')->group(function () {
    // Chat Bot Routes
    Route::prefix('chat')->group(function () {
        Route::post('/start', [ChatBotController::class, 'startChat']);
        Route::post('/message', [ChatBotController::class, 'sendMessage']);
        Route::get('/history/{sessionId}', [ChatBotController::class, 'getChatHistory']);
    });
}); 