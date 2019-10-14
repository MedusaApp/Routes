<?php

// Show membership pending page
Route::get('/pending', function () {
    return view('personality::auth.pending');
})->name('pending');
