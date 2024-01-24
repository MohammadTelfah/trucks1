<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});
Route::get('/light-duty-towing', function () {
    return view('third');
});
// Route::get('/medium-duty-towing', function () {
//     return view('fourth');
// });
Route::get('/accident-towing', function () {
    return view('fifth');
});
Route::get('/gallery', function () {
    return view('sixth');
});
Route::get('/about', function () {
    return view('aboutUs');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/medium-duty-towing', function () {
    return view('medium');
});


// Route::get('tracking-driver/{category}', [App\Http\Controllers\HomeController::class, 'trackingDriver'])->name('tracking-driver');

Auth::routes();

Route::get('/24-7-towing-wrecker-service', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
