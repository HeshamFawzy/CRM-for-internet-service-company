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
})->name('home');

Auth::routes();

Route::get('/start', 'HomeController@start')->name('start');

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/createplan', 'PlanController@createplan')->name('createplan');

Route::post('/createplanp', 'PlanController@createplanp')->name('createplanp');

Route::get('/addemployee', 'EmployeeController@addemployee')->name('addemployee');

Route::post('/addemployeep', 'EmployeeController@addemployeep')->name('addemployeep');

Route::get('/viewemployee', 'EmployeeController@viewemployee')->name('viewemployee');




Route::post('/editemployee', 'PlanController@editemployee')->name('editemployee');

Route::get('/deleteemployee', 'PlanController@deleteemployee')->name('deleteemployee');