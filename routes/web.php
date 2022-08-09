<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//Route::prefix('dashboard')->middleware(['auth', 'verified'])->name('dashboard.')->group(function () {
 //   Route::get('/home', function () {
 //       return view('home');
 //   });
//});

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware(['auth', 'verified']);


Route::get('/register-retry', function(){
    // Chrome F12 Headers - my_first_application_session=eyJpdiI6ImNnRH...
    Cookie::queue(Cookie::forget(strtolower(str_replace(' ', '_', config('app.name'))) . '_session')); // Delete the cookie
    return redirect('/');
 });
