<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoliController;
use App\Http\Controllers\BulutangkisController;


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
   return view('Home');
});

Route::get('/stopwatch', function () {
    return view('stopwatch');
 });

 Route::get('/bola', function () {
    return view('bola');
 });

 Route::get('/futsal', function () {
    return view('futsal');
 });

 Route::get('/basket', function () {
    return view('basket');
 });





 Route::resource('/voli', VoliController::class);
 Route::resource('/bulutangkis', BulutangkisController::class);
 
 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
