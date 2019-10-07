<?php

// Authentication routes, with email verification required
Auth::routes(['verify' => true]);

// Show membership pending page
Route::get('/pending', function () {
    return view('personality::auth.pending');
})->name('pending');
