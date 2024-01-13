<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get("/about", [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');
Route::get("/blogs", [App\Http\Controllers\BlogController::class, 'index']);
Route::get("/blog/{slug}", [App\Http\Controllers\BlogController::class, 'show']);

// contact form
Route::get("/contact", [App\Http\Controllers\ContactFormController::class, 'contact'])->name('contact');
Route::post("/contact", [App\Http\Controllers\ContactFormController::class, 'storeContact'])->name('contact.store');
Route::get("/check/validity", [App\Http\Controllers\ContactFormController::class, 'emailValidity']);
