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


Route::get('/','welcomeController@showIndex');
Route::get('/about','aboutController@showAbout');
Route::get('/booking','bookingController@showForm');
Route::post('/new-booking','bookingController@saveBookingInfo');

Route::get('/fare','fareController@showFair');
Route::post('/get-price','fareController@getFair');
Route::get('/contact','contactController@showController');
Route::get('/login-user','loginController@showLogin');
Route::post('/user-registration','loginController@registrationUser');
Route::post('/user-login','loginController@CheckLogin');
Route::get('/logout-user','loginController@checkOut');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-auto','addAutoController@ViewAddAutos');
Route::post('/new-auto','addAutoController@addAutoInfo');
Route::get('/manage-auto','addAutoController@manageAuto');
Route::get('/service-on/{id}','addAutoController@serviceOn');
Route::get('/service-off/{id}','addAutoController@serviceOff');
Route::get('/edit-autos/{id}','addAutoController@editAutoInfo');
Route::post('/update-autos','addAutoController@updateAutoInfo');

Route::get('/add-staff','staffController@addStaff');
Route::post('/new-staff','staffController@addStaffInfo');
Route::get('/manage-staff','staffController@manageStaffInfo');
Route::get('/duty-off/{id}','staffController@dutyOff');
Route::get('/duty-on/{id}','staffController@dutyOn');
Route::get('/edit-staff/{id}','staffController@editStaffInfo');
Route::post('/update-staff','staffController@updateStaffInfo');
Route::get('/manage-booking','bookingController@manageBooking');
Route::post('/add-auto-on-booking','bookingController@addAutoOnBooking');
Route::get('/staff-on-auto','staffAndAutoManageController@appointStaffOnAuto');
Route::post('/new-staff-on-auto','staffAndAutoManageController@newWorkingRecord');
Route::get('/edit-auto-staff','staffAndAutoManageController@editAutoOnStaff');
Route::post('/add-dismisal-date','staffAndAutoManageController@dismisalDate');
Route::get('/show-autos-on-booking','bookingController@showBookingDetails');







