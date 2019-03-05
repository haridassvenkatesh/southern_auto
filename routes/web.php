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


Route::get('/', 'login\login_controller@login');
Route::get('login', 'login\login_controller@login');
Route::get('logout', 'login\login_controller@logout');
Route::post('login_submit', 'login\login_controller@login_submit');
Route::get('change_password', 'common\common_controller@change_password');
Route::post('update_password', 'common\common_controller@update_password');

//Master Designation Details
Route::get('add_designation', 'master\designation_controller@add_designation');
Route::get('view_designation', 'master\designation_controller@view_designation');
Route::get('edit_designation', 'master\designation_controller@edit_designation');
Route::get('get_designation_details', 'master\designation_controller@get_designation_details');
Route::post('insert_designation', 'master\designation_controller@insert_designation');


//Master Academic Year Inputs

Route::get('view_academic', 'master\academic_controller@view_academic_inputs');
Route::get('add_academic', 'master\academic_controller@add_academic_inputs');
Route::get('edit_academic', 'master\academic_controller@edit_academic_inputs');
Route::post('insert_academic', 'master\academic_controller@insert_academic');
Route::get('get_academic_details', 'master\academic_controller@get_academic_details');

//Master Employee Details
Route::get('add_employee', 'master\employee_controller@add_employee');
Route::post('insert_employee', 'master\employee_controller@insert_employee');
Route::get('view_employee', 'master\employee_controller@view_employee');
Route::get('edit_employee', 'master\employee_controller@edit_employee');
Route::get('get_employee_details', 'master\employee_controller@get_employee_details');


//Master Company Details
Route::get('add_customer', 'master\customer_controller@add_customer');
Route::post('insert_customer', 'master\customer_controller@insert_customer');
Route::get('view_customer', 'master\customer_controller@view_customer');
Route::get('get_customer_details', 'master\customer_controller@get_customer_details');
Route::get('edit_customer', 'master\customer_controller@edit_customer');


//Transaction Create Enquiry
Route::get('create_enquiry', 'transaction\enquiry_controller@add_enquiry');
Route::get('edit_enquiry', 'transaction\enquiry_controller@edit_enquiry');
Route::get('enquiry_master', 'transaction\enquiry_controller@enquiry_master');
Route::post('insert_enquiry', 'transaction\enquiry_controller@insert_enquiry');
Route::get('get_contact_person', 'transaction\enquiry_controller@get_contact_person');
Route::get('get_contact_person_email', 'transaction\enquiry_controller@get_contact_person_email');
Route::get('get_enquiry_details', 'transaction\enquiry_controller@get_enquiry_details');
Route::get('view_enquiry', 'transaction\enquiry_controller@view_enquiry');
Route::get('view_enquiry_quoted', 'transaction\enquiry_controller@view_enquiry_quoted');
Route::get('view_enquiry_converted', 'transaction\enquiry_controller@view_enquiry_converted');
Route::get('view_enquiry_closed', 'transaction\enquiry_controller@view_enquiry_closed');
Route::get('view_enquiry_lost', 'transaction\enquiry_controller@view_enquiry_lost');
Route::get('view_enquiry_hold', 'transaction\enquiry_controller@view_enquiry_hold');
Route::get('view_total_enquiry', 'transaction\enquiry_controller@view_total_enquiry');


//Dashboard

Route::get('old_dashboard', 'dashboard\dashboard_controller@view_dashboard1');
Route::get('dashboard', 'dashboard\dashboard_controller@view_dashboard');


