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



require __DIR__.'/auth.php';
//required user login 

//admin role Group
Route::group(['middleware'=> 'is_admin'], function(){
   Route::get('/dashboard', function(){
       return view('dashboard');
   })->name('dashboard');
});

//User role Group
Route::group(['middleware'=> 'auth'], function(){
    Route::resource('/clients','App\Http\Controllers\ClientController');
    Route::resource('/projects','App\Http\Controllers\ProjectController');
});
