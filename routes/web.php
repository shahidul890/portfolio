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


Route::get("/", [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get("/about", [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');
Route::get("/contact", [App\Http\Controllers\WelcomeController::class, 'contact'])->name('contact');
Route::post("/contact", [App\Http\Controllers\WelcomeController::class, 'storeContact'])->name('contact.store');


// Authentication
Auth::routes();

// After Login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
