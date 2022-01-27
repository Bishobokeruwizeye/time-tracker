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
    return view('welcome');
});
// Route::get('/sabato', function(){
//     return "i am sabato";
// });
// Route::post('/clients', '\ClientController@store');
// Route::put('/clients/{client}','App\Http\Controllers\ClientController@update');
// Route::resource('/clients', 'App\Http\Controllers\ClientController');

// Route::resource('/projects', '');
Route::resource('/clients', 'App\Http\Controllers\ClientController');
Route::resource('/projects', 'App\Http\Controllers\ProjectController');
// Route::resource('projects', 'App\Http\Controllers\ProjectController');
// Route::resource('clients', 'App\Http\Controllers\ClientController');
// Route::get('/clients/{client}','App\Http\Controllers\ClientController@show');

// Route::get('/projects/{project}','App\Http\Controllers\ProjectController@show');
