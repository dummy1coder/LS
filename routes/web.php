<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;

use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\MailController;



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
    return view('welcome');
});

Route::get('/about', function () {
    return view('Frontend.about');
})->name('about');


Route::get('/home', function () {
    return view('Frontend.home');
})->name('home');


Route::get('/product', function () {
    return view('Frontend.product');
})->name('product');

Route::get('/testimonial', function () {
    return view('Frontend.testimonial');
})->name('testimonial');

Route::get('/client', function () {
    return view('Frontend.client');
})->name('client');

Route::get('/service', function () {
    return view('Frontend.service');
})->name('service');

Route::get('/contact', function () {
    return view('Frontend.contact');
})->name('contact');

Route::get('/quote', function () {
    return view('Frontend.quote');
})->name('quote');

Route::post('/send-contact', [MailController::class, 'sendContact'])->name('send.contact');

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();*/
