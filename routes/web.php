<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');