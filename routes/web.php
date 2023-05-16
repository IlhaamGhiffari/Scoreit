<?php

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

 Route::get('/voli', function () {
    return view('voli');
 });

 Route::get('/bulutangkis', function () {
    return view('bulutangkis');
 });
 
 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
