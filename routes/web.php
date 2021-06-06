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

Route::get('/', function () { return view('welcome'); });
Route::get('/histoire', function () { return view('about'); });
Route::get('/actualites', function () { return view('actus'); });
Route::get('/forfaits', function () { return view('forfaits'); });
Route::get('/confirmation', function () { return view('confirmationabonnements'); });
Route::get('/inscription', function () { return view('inscription'); });
Route::get('/connexion', function () { return view('connection'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/profil', function () { return view('user'); });
Route::get('/abonnements', function () { return view('userabonnements'); });
Route::get('/factures', function () { return view('userfactures'); });
Route::get('/crudactu', function () { return view('adminactu'); });
Route::get('/cruduser', function () { return view('adminuser'); });
Route::get('/adminabonnements', function () { return view('adminabonnements'); });
