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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/surveys/create', 'App\Http\Controllers\EverysurveysController@create');
Route::post('/surveys', 'App\Http\Controllers\EverysurveysController@store');
Route::get('/surveys/{survey}' , 'App\Http\Controllers\EverysurveysController@show');