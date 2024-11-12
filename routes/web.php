<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('HobbyNest');
});

Route::get('/Home', function () {
    return view('Home');
})->name('home');

Route::get('/Community', function () {
    return view('Community');
});

Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/EditProfile', function () {
    return view('EditProfile');
});

Route::get('/Sign In', [AuthManager::class, 'signIn'])->name('signIn');
Route::post('/Sign In', [AuthManager::class, 'signInPost'])->name('signIn.post');

Route::get('/Sign Up', [AuthManager::class, 'signUp']) ->name('signUp');
Route::post('/Sign Up', [AuthManager::class, 'signUpPost'])->name('signUp.post');

Route::get('/Sign Out', [AuthManager::class, 'signOut'])->name('signOut');