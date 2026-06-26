<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.pages.home')->name('home');
Route::view('/about', 'frontend.pages.about')->name('about');
Route::view('/packages', 'frontend.pages.packages')->name('packages');
Route::view('/book-now', 'frontend.pages.book-now')->name('book-now');
Route::view('/faq', 'frontend.pages.faq')->name('faq');
Route::view('/contact-me', 'frontend.pages.contact')->name('contact');

Route::get('/booking-checkout', function () {
    $rawAmount = request('amount', '65');
    $amount = (float) preg_replace('/[^0-9.]/', '', $rawAmount);

    if ($amount <= 0) {
        $amount = 65;
    }

    $booking = [
        'title' => request('title', 'Private Tutoring Session'),
        'subject' => request('subject', 'Math'),
        'mode' => request('mode', 'Private'),
        'date' => request('date', 'Selected Date'),
        'time' => request('time', 'Selected Time'),
        'duration' => request('duration', '45 min'),
        'spots' => request('spots', '1 spot left'),
        'amount' => number_format($amount, 2, '.', ''),
    ];

    return view('frontend.pages.booking-checkout', compact('booking'));
})->name('booking.checkout');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.pages.dashboard')->name('dashboard');
});