<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;

use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\MailController;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\ChatbotController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ServiceController;
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


Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/testimonial', function () {
    return view('Frontend.testimonial');
})->name('testimonial');

Route::get('/client', function () {
    return view('Frontend.client');
})->name('client');


Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/contact', function () {
    return view('Frontend.contact');
})->name('contact');

Route::get('/quote', function () {
    return view('Frontend.quote');
})->name('quote');

Route::post('/send-contact', [MailController::class, 'sendContact'])->name('send.contact');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/chat', [ChatbotController::class, 'show']);
Route::post('/chat', [ChatbotController::class, 'send'])->name('chat.send');
Route::post('/chat/toggle', [ChatbotController::class, 'toggle'])->name('chat.toggle');


Route::get('/products', [ProductController::class, 'index']);