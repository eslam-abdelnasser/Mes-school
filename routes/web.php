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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', function () {
    return view('modules.dashboard');
});

Route::get('/admission-setting','GeneralSettingController@admissionCreate')->name('admission-setting');
Route::post('/admission-setting','GeneralSettingController@admissionPost')->name('admission.post');

Route::get('/admission','AdmissionController@index')->name('admission');