<?php

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
Route::get('/shivJyoti', function(){
    return view('shivJyoti.index');
});
Route::get('/shivAbout', function(){
    return view('shivJyoti.about');
});
Route::get('/shivCourse', function(){
    return view('shivJyoti.allCourse');
});
Route::get('/shivEvent', function(){
    return view('shivJyoti.event');
});
Route::get('/shivContact', function(){
    return view('shivJyoti.contactUs');
});
Route::get('/shivAddmission', function(){
    return view('shivJyoti.Addmission');
});
Route::get('/shivAward', function(){
    return view('shivJyoti.award');
});
Route::get('/shivSeminar', function(){
    return view('shivJyoti.seminar');
});
Route::resource('/salesForm','SalesVoucher');
