<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LimoController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', function () {
    auth()->logout();
    return redirect()->route('login');
})->name('logout');

Route::get('home/services/{id}/{service_id}', [HomeController::class, 'fetchService']);

Route::get('home/save', [HomeController::class, 'storeEnquiry'])->name('storeEnquiry');
Route::get('home/confirmation', [HomeController::class, 'successEnquiry'])->name('successEnquiry');
Route::resource('home', HomeController::class);


//  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//  Route::resource('limos', LimoController::class);
//  Route::resource('extras', ExtraController::class);
//  Route::resource('users', UserController::class);
//  Route::resource('clients', ClientController::class);
//  Route::resource('services', ServiceController::class);
//  Route::resource('enquiries', EnquiryController::class);

Route::middleware(['auth','admin'])->group(function () {
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::resource('limos', LimoController::class);
   Route::resource('extras', ExtraController::class);
   Route::resource('users', UserController::class);
   Route::resource('clients', ClientController::class);
   Route::resource('services', ServiceController::class);
   Route::resource('enquiries', EnquiryController::class);
});
