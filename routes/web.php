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
Route::get('/', function () { return view('welcome'); });
Route::get('/histoire', function () { return view('about'); });
Route::get('/actualites', function () { return view('actus'); });
Route::get('/services', function () { return view('services'); });
Route::get('/contact', function () { return view('contact'); });

//user
Route::get('/profil', function () { return view('user'); });
Route::get('/abonnement', function () { return view('userabonnements'); });
Route::get('/confirmation', function () { return view('confirmationabonnements'); });
Route::get('/factures', function () { return view('userfactures'); });


Route::get('profile', [\App\Http\Controllers\Admin\UserController::class, 'profile' ]) ->name('profile');


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



//admin routes

//Route::get('/crudabonnemntf', function () { return view('admin/abonnementForm'); });
//Route::get('/crudabonnemnt', function () { return view('admin/abonnementList'); });
//Route::get('/crudaboutf', function () { return view('admin/aboutForm'); });
//Route::get('/crudabout', function () { return view('admin/aboutList'); });

//Route::get('/crudactuf', function () { return view('admin/actuForm'); });
//Route::get('/crudactu', function () { return view('admin/actuList'); });

//Route::get('/cruduserf', function () { return view('admin/userForm'); });
//Route::get('/cruduser', function () { return view('admin/userList'); });

