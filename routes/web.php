<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);

// About routes
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/graduate-study-areas', [AboutController::class, 'graduateStudyAreasIndex'])->name('about.study-areas');
Route::get('/about/undergraduate', [AboutController::class, 'undergraduateIndex'])->name('about.undergraduate');

// Events route
Route::get('/events', [EventsController::class, 'index'])->name('events');

// Apply route
Route::get('/apply', [ApplyController::class, 'index'])->name('apply');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Post routes
Route::post('/post', [PostController::class, 'store'])->name('post.submit');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
Route::post('/posts/{id}/status', [PostController::class, 'updateStatus'])->name('post.status');
Route::post('/posts/{id}/archive', [PostController::class, 'archive'])->name('post.archive');

// Dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
