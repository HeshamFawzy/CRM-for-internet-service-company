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

Route::post('/searchemployee', 'EmployeeController@searchemployee')->name('searchemployee');

Route::get('/editemployee/{id}', 'EmployeeController@editemployee')->name('editemployee');

Route::post('/editemployeep', 'EmployeeController@editemployeep')->name('editemployeep');

Route::get('/deleteemployee/{id}', 'EmployeeController@deleteemployee')->name('deleteemployee');


Route::get('/addcustomer', 'CustomerController@addcustomer')->name('addcustomer');

Route::post('/addcustomerp', 'CustomerController@addcustomerp')->name('addcustomerp');

Route::get('/viewcustomer', 'CustomerController@viewcustomer')->name('viewcustomer');

Route::post('/searchcustomer', 'CustomerController@searchcustomer')->name('searchcustomer');

Route::get('/editcustomer/{id}', 'CustomerController@editcustomer')->name('editcustomer');

Route::post('/editcustomerp', 'CustomerController@editcustomerp')->name('editcustomerp');

Route::get('/deletecustomer/{id}', 'CustomerController@deletecustomer')->name('deletecustomer');


Route::get('/addcomplaint', 'ComplaintController@addcomplaint')->name('addcomplaint');

Route::post('/addcomplaintp', 'ComplaintController@addcomplaintp')->name('addcomplaintp');

Route::get('/viewcomplaint', 'ComplaintController@viewcomplaint')->name('viewcomplaint');

Route::post('/searchcomplaint', 'ComplaintController@searchcomplaint')->name('searchcomplaint');