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


Route::get("/", [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get("/about", [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');

// contact form
Route::get("/contact", [App\Http\Controllers\ContactFormController::class, 'contact'])->name('contact');
Route::post("/contact", [App\Http\Controllers\ContactFormController::class, 'storeContact'])->name('contact.store');
Route::get("/check/validity", [App\Http\Controllers\ContactFormController::class, 'emailValidity']);


// // Authentication
// Auth::routes();

// // After Login
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
