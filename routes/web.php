<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about-us', [WelcomeController::class, 'about'])->name('about');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/detail/{id}', [WelcomeController::class, 'detail'])->name('detail');
Route::post('/makeFullName', [WelcomeController::class, 'makeFullName'])->name('make-full-name');
Route::post('/calculator', [WelcomeController::class, 'calculator'])->name('calculator');
