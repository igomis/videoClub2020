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

Route::get('/',HomeController::class);
Route::get('login', function () {return view('login');})->name('login');
Route::post('login','LoginController@login')->name('postLogin');
Route::get('logout', 'LoginController@logout')->name('logout')->middleware('auth');

Route::resource('movie',MovieController::class);
Route::get('movie/{id}/rent','MovieController@rent')->name('rent');
Route::get('movie/{id}/return','MovieController@return')->name('return');

Route::resource('genre',GenreController::class);
/**
Route::get('catalog', function () { return view('index');});
Route::get('catalog/show/{id}', function ($id) { return view('show',['pelicula'=>$id]);});
Route::get('catalog/create', function () { return view('create');});
Route::get('catalog/edit/{id}', function ($id) {return view('edit',['pelicula' =>$id]);});
 */
