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

Route::get('/list_register','App\Http\Controllers\homeController@get_all_register');

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/mail_box',function(){
    return view('mail_box');
});