<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->withoutMiddleware('auth');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/about/graduate-study-areas', [App\Http\Controllers\AboutController::class, 'graduateStudyAreasIndex'])->name('about.study-areas');
Route::get('/about/undergraduate', [App\Http\Controllers\AboutController::class, 'undergraduateIndex'])->name('about.undergraduate');

Route::get('/events', [App\Http\Controllers\EventsController::class, 'index'])->name('events');

Route::get('/apply', [App\Http\Controllers\ApplyController::class, 'index'])->name('apply');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');
Route::get('/contacts/{id}', [App\Http\Controllers\ContactController::class, 'show'])->name('contacts.show');

Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.submit');
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::post('/posts/{id}/status', [App\Http\Controllers\PostController::class, 'updateStatus'])->name('post.status');
Route::post('/posts/{id}/archive', [App\Http\Controllers\PostController::class, 'archive'])->name('post.archive');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
