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

//Route::get('/', function () { // return view('welcome'); //});

//login page
Route::get('login', 'login_controller@login');
Route::get('logout', 'login_controller@logout');
Route::get('add_designation', 'designation_controller@add_designation');
Route::get('view_designation', 'designation_controller@view_designation');
Route::get('edit_designation', 'designation_controller@edit_designation');
Route::get('get_designation_details', 'designation_controller@get_designation_details');
Route::post('insert_designation', 'designation_controller@insert_designation');

