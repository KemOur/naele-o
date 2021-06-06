<?php

use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\PostsController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

//Authentification
Route::post('auth/register', [ApiTokenController::class, 'register']);
Route::post('auth/login', [ApiTokenController::class, 'login']);
Route::middleware('auth:sanctum')->post('auth/me', [ApiTokenController::class, 'me']);
Route::middleware('auth:sanctum')->post('auth/logout', [ApiTokenController::class, 'logout']);

Route::get('auth/posts', [Posts::class, 'postsByUser']);

Route::prefix('/auth')->group(function () {
    Route::post('/store', [PostsController::class, 'store']);
    Route::put('/{id}', [ApiTokenController::class, 'update']);
    Route::delete('/{id}', [ApiTokenController::class, 'destroy']);
});
