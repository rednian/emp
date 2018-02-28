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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@showLogin')->name('login');
Route::post('/login','LoginController@postLogin')->name('login.submit');



Route::group(['middleware'=>'auth'],function(){

    Route::get('/','DashboardController@index')->name('dashboard');
    Route::post('employee/upload','EmployeeController@upload')->name('employee.upload');
    Route::post('employee/training','EmployeeController@training')->name('employee.training');
    Route::resource('/training','TrainingController');
    Route::resource('/employee','EmployeeController');
    Route::get('/logout','LoginController@logout')->name('logout');

});
