<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;



Route::prefix('cp')->group(function(){
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'handleLogin']);
    Route::post('/logout', [LoginController::class, 'handleLogout']);
    Route::post('/password/forgot', \App\Http\Controllers\Auth\ForgotPasswordController::class);
    Route::inertia('/password/reset/verify', 'Auth/ResetPassword');
    Route::post('/password/reset/verify', \App\Http\Controllers\Auth\VerificationController::class);
    Route::post('/password/reset', \App\Http\Controllers\Auth\ResetPasswordController::class);
});


Route::get("/", [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get("/about", [App\Http\Controllers\WelcomeController::class, 'about'])->name('about');
Route::get("/projects", [App\Http\Controllers\WelcomeController::class, 'projects'])->name('welcome.projects');
Route::get("/blogs", [App\Http\Controllers\BlogController::class, 'index'])->name('welcome.blogs');
Route::get("/blogs/{slug}", [App\Http\Controllers\BlogController::class, 'show'])->name('welcome.blogs.show');

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

    Route::put('tags/{id}/status', [TagController::class, 'toggleStatus']);
    Route::resource('tags', TagController::class);
    
    Route::resource('blogs', AdminBlogController::class);
    
    Route::resource('projects', ProjectController::class);

    Route::resource('skills', SkillController::class);

    Route::resource('services', ServiceController::class);

    // upload files
    Route::post('upload/file', FileUploadController::class)->withoutMiddleware('auth');

    Route::resource('contact-requests', ContactController::class);
});