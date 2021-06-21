<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Acces à cette route seulement une fois connecté
//Route::get('/', function () { return view('welcome'); })->middleware(['auth'])->name('welcome');

Route::get('/checkout', '\App\Http\Controllers\CheckoutController@index');
require __DIR__.'/auth.php';

//all
//Route::get('/', function () { return view('welcome'); });
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index' ]) ->name('index');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'lastactus' ]) ->name('lastactus');


Route::get('/histoire', function () { return view('about'); });
//Route::get('/actualites', function () { return view('actus'); });
Route::get('/services', function () { return view('services'); });
//Route::get('/contact', function () { return view('contact'); });
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index' ]) ->name('index');
Route::post('contact', [\App\Http\Controllers\ContactController::class, 'store' ]) ->name('store');

//user
Route::get('/profil', function () { return view('user'); });
Route::get('/abonnement', function () { return view('userabonnements'); });
Route::get('/confirmation', function () { return view('confirmationabonnements'); });
Route::get('/factures', function () { return view('userfactures'); });

Route::get('profile', [\App\Http\Controllers\Admin\UserController::class, 'profile' ]) ->name('profile');
//search actualitys
Route::get('actus', [\App\Http\Controllers\ActualityContoller::class, 'index' ]) ->name('route.index');
//Route::get('/search/', 'PostsController@search')->name('search');
Route::get('actus', [\App\Http\Controllers\ActualityContoller::class, 'search' ]) ->name('route.search');
Route::get('actudetail/{id}', [\App\Http\Controllers\ActualityContoller::class, 'detail' ]) ->name('route.detail');


Route::group(['middleware' => 'auth'], function (){
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.',
    ], function (){
        //Users
        Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'userList' ]) ->name('route.userList');
        Route::get('users/create', [\App\Http\Controllers\Admin\UserController::class, 'userForm' ]) ->name('route.userForm');
        Route::post('users/store', [\App\Http\Controllers\Admin\UserController::class, 'store' ]) ->name('users.store');
        Route::get('users/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'editUser' ]) ->name('users.editUser');
        Route::put('users/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update' ]) ->name('users.update');
        Route::delete('users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy']) ->name('users.destroy');
        //Actus
        Route::get('actus', [\App\Http\Controllers\Admin\ActuController::class, 'index' ]) ->name('route.index');
        Route::get('actus/create', [\App\Http\Controllers\Admin\ActuController::class, 'create' ]) ->name('route.create');
        Route::post('actus/store', [\App\Http\Controllers\Admin\ActuController::class, 'store' ]) ->name('actus.store');
        Route::get('actus/edit/{id}', [\App\Http\Controllers\Admin\ActuController::class, 'edit' ]) ->name('actus.edit');
        Route::put('actus/edit/{id}', [\App\Http\Controllers\Admin\ActuController::class, 'update' ]) ->name('actus.update');
        Route::delete('actus/{id}', [\App\Http\Controllers\Admin\ActuController::class, 'destroy' ]) ->name('actus.destroy');

    });
});

Route::group(['middleware' => 'auth'], function (){
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
    ], function (){
        Route::get('/', [ \App\Http\Controllers\User\UserController::class, 'index' ])->name('route.index');

     });
});
