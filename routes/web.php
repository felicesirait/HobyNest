<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommunityController;

Route::get('/', function () {
    return view('HobbyNest');
});

Route::get('/admin', function () {
    return view('Admin');
});

Route::get('/Home', function () {
    return view('Home');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('Admin');
    })->name('admin');
});

Route::get('/Community', function () {
    return view('Community');
});


// Route::get('/Profile', function () {
//     return view('Profile');
// });

Route::get('/Profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/create', function () {
    return view('create');
});

Route::get('/Forum', function () {
    return view('Forum');
});

Route::get('/Disscussion', function () {
    return view('Disscussion');
});

// Route::get('/EditProfile', function () {
//     return view('EditProfile');
// });

Route::get('/Marketplace', function () {
    return view('Marketplace');
});

Route::get('/DetailPesanan', function () {
    return view('DetailPesanan');
});

Route::get('/MetodePembayaran', function () {
    return view('MetodePembayaran');
});

Route::get('/Sign In', [AuthManager::class, 'signIn'])->name('signIn');
Route::post('/Sign In', [AuthManager::class, 'signInPost'])->name('signIn.post');

Route::get('/Sign Up', [AuthManager::class, 'signUp']) ->name('signUp');
Route::post('/Sign Up', [AuthManager::class, 'signUpPost'])->name('signUp.post');

Route::post('/logout', [AuthManager::class, 'signOut'])->name('logout');

// Route::get('/Sign Out', [AuthManager::class, 'signOut'])->name('signOut');



// Route::get('/admin', function () {
//     return view('Admin');
// })->name('admin');

// Rute untuk profil
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

// // Rute untuk komunitas
// Route::get('/community/create', [CommunityController::class, 'create'])->name('community.create');
// Route::post('/community', [CommunityController::class, 'store'])->name('community.store');
// Route::get('/community/{id}', [CommunityController::class, 'show'])->name('community.show');
// Route::get('/community', [CommunityController::class, 'index'])->name('community.index');

// // Rute untuk forum komunitas
// Route::get('/community/{id}/forum', [CommunityController::class, 'forum'])->name('community.forum');