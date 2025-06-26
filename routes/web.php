<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home.index');

Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/devis', function () {
    return view('devis');
})->name('devis');

Route::post('/devis', [DevisController::class, 'sendDevis'])->name('devis.send');