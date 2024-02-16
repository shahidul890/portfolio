<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Auth::routes();

Route::get("/", [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get("/about", [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');
Route::get("/blogs", [App\Http\Controllers\BlogController::class, 'index']);
Route::get("/blog/{slug}", [App\Http\Controllers\BlogController::class, 'show']);

// contact form
Route::get("/contact", [App\Http\Controllers\ContactFormController::class, 'contact'])->name('contact');
Route::post("/contact", [App\Http\Controllers\ContactFormController::class, 'storeContact'])->name('contact.store');
Route::get("/check/validity", [App\Http\Controllers\ContactFormController::class, 'emailValidity']);

Route::middleware('auth')
->group(function(){
    Route::get('home', [HomeController::class, 'index']);
});