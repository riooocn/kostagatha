<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/', [ HomeController::class , 'showHome']);

Route::get('/location', [ LocationController::class , 'showLocation']);

Route::get('/about', [ AboutController::class , 'showAbout']);

Route::get('/contact', [ ContactController::class , 'showContact']);




