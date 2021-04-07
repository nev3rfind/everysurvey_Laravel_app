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
   // return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/surveys/create', 'App\Http\Controllers\EverysurveysController@create')->name('create');
Route::post('/surveys', 'App\Http\Controllers\EverysurveysController@store');
<<<<<<< Updated upstream
Route::get('/surveys/{survey}' , 'App\Http\Controllers\EverysurveysController@show');
=======
Route::get('/surveys/{survey}' , 'App\Http\Controllers\EverysurveysController@show');

Route::get('surveys/{survey}/questions/create', 'App\Http\Controllers\SurveyController@create');
Route::post('surveys/{survey}/questions', 'App\Http\Controllers\SurveyController@store');
Route::delete('/surveys/{survey}/questions/{question}', 'App\Http\Controllers\SurveyController@destroy');

Route::get('/analyses/{survey}-{slug}', 'App\Http\Controllers\DeepSurveyController@show');
Route::post('/analyses/{survey}-{slug}', 'App\Http\Controllers\DeepSurveyController@store');
>>>>>>> Stashed changes
