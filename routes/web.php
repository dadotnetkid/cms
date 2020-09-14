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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get("patients","PatientsController@get")->name("patients");*/
Route::get("/api/patients","API\PatientsController@index");
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
