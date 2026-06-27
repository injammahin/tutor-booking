<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.pages.home')->name('home');
Route::view('/about', 'frontend.pages.about')->name('about');
Route::view('/packages', 'frontend.pages.packages')->name('packages');
Route::view('/services', 'frontend.pages.services')->name('services');
Route::view('/book-now', 'frontend.pages.book-now')->name('book-now');
Route::view('/faq', 'frontend.pages.faq')->name('faq');
Route::view('/contact-me', 'frontend.pages.contact')->name('contact');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.pages.dashboard')->name('dashboard');
});