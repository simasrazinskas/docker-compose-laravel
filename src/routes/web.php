<?php

use App\Models\Flight;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\DayplanFlightInformationController;
use App\Http\Controllers\AirportController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('/flights', FlightController::class);

// Resource route for DayplanFlightInformation
Route::resource('flightinformation', DayplanFlightInformationController::class);

// Resource route for Airport
Route::resource('airports', AirportController::class);

Route::get('/api/flights/{flight}', function (Flight $flight) {
    return response()->json($flight);
});