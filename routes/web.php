<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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
//    Contact page
    Route::get('/contact', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contact');
    Route::delete('/contact/{id}/delete', [\App\Http\Controllers\Admin\ContactController::class, 'delete']);
//    Testimonial page
    Route::resource('/testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
});


Route::get('/', [\App\Http\Controllers\Site\HomeController::class, 'index'])->name('home');
//Route::get('/careers', [\App\Http\Controllers\Site\HomeController::class, 'index'])->name('careers');
Route::post('/contact-us', [\App\Http\Controllers\Site\ContactController::class, 'store'])->name('contact');


//sitemap
//Route::get('/sitemap', function() {
//    /** The following line creates sitemap.xml in public folder based on your website_url  */
//    SitemapGenerator::create('https://dgcore.net')->writeToFile('sitemap.xml');
//});
