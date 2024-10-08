<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HobbyNest');
});

Route::get('/Sign Up', function () {
    return view('Sign Up');
});

Route::get('/Sign In', function () {
    return view('Sign In');
});