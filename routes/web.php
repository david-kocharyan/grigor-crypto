<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

//admin part
Route::group(['middleware' => 'auth:web', 'prefix' => '/admin'], function () {
//    Home page
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    Route::resource('slider-one', \App\Http\Controllers\Admin\SlideOneController::class);
    Route::resource('slider-two', \App\Http\Controllers\Admin\SlideTwoController::class);
    Route::resource('slider-circle', \App\Http\Controllers\Admin\SlideCircleController::class);
    Route::resource('referrals', \App\Http\Controllers\Admin\RefferalController::class);
});


Route::get('/', [\App\Http\Controllers\Site\HomeController::class, 'index'])->name('home');
