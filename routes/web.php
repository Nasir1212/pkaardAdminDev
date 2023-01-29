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

Route::get('/Franchiac_summary',function(){
    return view('Franchiac_summary_view');
});

Route::get('Franchiac_summary_details', function (){

    return view('Franchiac_summary_details');
});

Route::get('overall_report',function(){
    return view('overall_report_view');
});
Route::get('corporate_report',function(){
return view('corporate_report');
});
Route::get('profile',function(){
 return view('profile');
});

Route::get('communication_view',function(){
    return view('communication_view');
});