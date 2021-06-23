<?php

use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\PostsController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;


//Junior->routes
Route::post('register', [ApiTokenController::class, 'register']);
Route::post('login', [ApiTokenController::class, 'login']);
Route::middleware('auth:sanctum')->post('profile', [ApiTokenController::class, 'profile']);
Route::middleware('auth:sanctum')->post('logout', [ApiTokenController::class, 'logout']);
//Contacter
Route::get('contact', [ApiTokenController::class, 'contact']);
Route::post('contact', [ApiTokenController::class, 'store']);



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




//partie intéressant trouvé dans un projet
Route::post('passwords/reset', 'Api\Auth\PasswordsController@store');
Route::put('passwords/reset', 'Api\Auth\PasswordsController@update');
