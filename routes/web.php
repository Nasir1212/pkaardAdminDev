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


Route::get('/login',function(){
    return view('login_view');
});

Route::get('/selecting_login',function(){
    return view('selecting_login');
});


Route::get('/admin_login',function(){
    return view('admin_login_view');
});


Route::get('/admin_otp',function(){
    return view('admin_otp_view');
});

Route::get('/logout_auth','App\Http\Controllers\homeController@logout_auth');
Route::get('/send_otp_admin/{mail}','App\Http\Controllers\homeController@send_otp_admin');
Route::post('/login_check','App\Http\Controllers\homeController@login_check');
Route::post('/admin_otp_check','App\Http\Controllers\homeController@admin_otp_check');




Route::get('/counting_by_reference','App\Http\Controllers\homeController@counting_by_reference')->middleware('login');


Route::get('/list_register','App\Http\Controllers\homeController@get_all_register')->middleware('login');

Route::post('/card_registation_add','App\Http\Controllers\homeController@card_registation_add')->middleware('login');

Route::get('/','App\Http\Controllers\homeController@dashboard')->middleware('login');

Route::get('/mail_box',function(){
    return view('mail_box');
})->middleware('login');

Route::get('/handle_branch_action/{id}/{action}','App\Http\Controllers\homeController@handle_branch_action')->middleware('login');

Route::get('/branch','App\Http\Controllers\homeController@branch')->middleware('login');
Route::get('/get_branch_all_data','App\Http\Controllers\homeController@get_branch_all_data')->middleware('login');
Route::post('/branch_user','App\Http\Controllers\homeController@branch_user')->middleware('login');

Route::post('/update_branch','App\Http\Controllers\homeController@update_branch')->middleware('login');

Route::get('/Franchiac_summary',function(){
    return view('Franchiac_summary_view');
})->middleware('login');

Route::get('Franchiac_summary_details', function (){

    return view('Franchiac_summary_details');
})->middleware('login');

Route::get('overall_report',function(){
    return view('overall_report_view');
})->middleware('login');
Route::get('corporate_report',function(){
return view('corporate_report');
})->middleware('login');
Route::get('profile',function(){
 return view('profile');
})->middleware('login');

Route::get('communication_view',function(){
    return view('communication_view');
})->middleware('login');

Route::get('add_card_user',function(){
    return view('add_card_user_view');
})->middleware('login');