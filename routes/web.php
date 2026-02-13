<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/welcome', function () {
    return view('welcome'); // the page after login
})->name('welcome');

// Sign Up page
Route::get('/signup', function () {
    return view('signup'); // This will be signup.blade.php
})->name('signup');

// Sign Up complete page
Route::get('/signUpComplete', function () {
    return view('signUpComplete'); // This will be signup.blade.php
})->name('signUpComplete');