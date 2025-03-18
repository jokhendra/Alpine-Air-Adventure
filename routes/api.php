<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Booking routes without auth
Route::prefix('booking')->group(function () {
    Route::post('/check-availability', [BookingController::class, 'checkAvailability']);
    Route::post('/create', [BookingController::class, 'createBooking']);
    Route::post('/capture-payment', [BookingController::class, 'capturePayment']);
});

