<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\AuthManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;


// Rute untuk komunitas
Route::get('/community/create', [CommunityController::class, 'create'])->name('community.create');
Route::post('/community', [CommunityController::class, 'store'])->name('community.store');
Route::get('/community/{id}', [CommunityController::class, 'show'])->name('community.show');
Route::get('/community', [CommunityController::class, 'index'])->name('community.index');

// Rute untuk forum komunitas
Route::get('/community/{id}/forum', [CommunityController::class, 'forum'])->name('community.forum');

// Rute untuk Sign In dan Sign Up
// Route::get('/Sign In', [AuthManager::class, 'signIn'])->name('signIn');
// Route::post('/Sign In', [AuthManager::class, 'signInPost'])->name('signIn.post');

// Route::get('/Sign Up', [AuthManager::class, 'signUp']) ->name('signUp');
// Route::post('/Sign Up', [AuthManager::class, 'signUpPost'])->name('signUp.post');


Route::post('SignUp', [AuthController::class, 'SignUp']);
Route::get('getAllUsers', [AuthController::class, 'getAllUsers']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
