<?php
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommunityController as ApiCommunityController;


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::put('/profile', [ProfileController::class, 'update']);
});

// Rute API untuk komunitas
Route::get('/communities', [ApiCommunityController::class, 'index']);
Route::get('/communities/{id}', [ApiCommunityController::class, 'show']);
Route::post('/communities', [ApiCommunityController::class, 'store']);
Route::put('/communities/{id}', [ApiCommunityController::class, 'update']);
Route::delete('/communities/{id}', [ApiCommunityController::class, 'destroy']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/communities', ApiCommunityController::class);
});