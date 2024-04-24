<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['login'=>false]);
Route::get('cp', [LoginController::class, 'showLoginForm']);

Route::get("/", [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get("/about", [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');
Route::get("/blogs", [App\Http\Controllers\BlogController::class, 'index']);
Route::get("/blog/{slug}", [App\Http\Controllers\BlogController::class, 'show']);

// contact form
Route::get("/contact", [App\Http\Controllers\ContactFormController::class, 'contact'])->name('contact');
Route::post("/contact", [App\Http\Controllers\ContactFormController::class, 'storeContact'])->name('contact.store');
Route::get("/check/validity", [App\Http\Controllers\ContactFormController::class, 'emailValidity']);


Route::middleware('auth')
->prefix('cp')
->group(function(){
    Route::get('home', [HomeController::class, 'index']);

    Route::put('categories/{id}/status', [CategoryController::class, 'toggleStatus']);
    
    Route::resource('categories', CategoryController::class);
    
    Route::resource('blogs', AdminBlogController::class);
    
    // upload files
    Route::post('upload/file', FileUploadController::class)->withoutMiddleware('auth');

    Route::resource('contact-requests', ContactController::class);
});