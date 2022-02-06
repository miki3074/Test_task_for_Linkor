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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('redirects', '\App\Http\Controllers\RoleController@indexone');



Route::resource('issue', '\App\Http\Controllers\IssueController');
Route::resource('sadmin', '\App\Http\Controllers\SadminController');
Route::resource('redirects', '\App\Http\Controllers\RoleController');
Route::resource('scooter', '\App\Http\Controllers\ScooterController');
Route::resource('order', '\App\Http\Controllers\OrderController');
Route::resource('booking', '\App\Http\Controllers\BookingController');
Route::resource('arenda', '\App\Http\Controllers\ExtraditionController');
Route::resource('bookingorder', '\App\Http\Controllers\BookingorderController');

Route::get('issue/{id}/delete', '\App\Http\Controllers\RoleController@deleteIssue')->name('issue-delete');
Route::get('scooter/{id}/delete', '\App\Http\Controllers\RoleController@deleteScooter')->name('scooter-delete');
Route::get('booking/{id}/delete','\App\Http\Controllers\RoleController@deleteBooking')->name('booking-delete');
Route::get('order/{id}/delete','\App\Http\Controllers\RoleController@deleteOrder')->name('order-delete');
Route::get('user/{id}/delete','\App\Http\Controllers\RoleController@deleteUser')->name('user-delete');
Route::get('ext/{id}/delete', '\App\Http\Controllers\RoleController@deleteExt')->name('ext-delete');

Route::get('bookinguser/{id}/delete','\App\Http\Controllers\RoleController@deleteBookinguser')->name('bookinguser-delete');


Route::get('scooter/{id}/update', '\App\Http\Controllers\RoleController@updateScooter')->name('update-scooter');
Route::post('scooter/{id}/update', '\App\Http\Controllers\RoleController@updateScooterid')->name('update-scooter-id');

Route::get('issueedit/{id}/update', '\App\Http\Controllers\RoleController@updateIssue')->name('issue-update');
Route::post('issueedit/{id}/update', '\App\Http\Controllers\RoleController@updateIssueid')->name('issue-update-id');

Route::get('extradition/{id}', '\App\Http\Controllers\RoleController@createExtradition')->name('extradition');



Route::get('shift-data/{id}', '\App\Http\Controllers\RoleController@shift')->name('shift-data');
Route::get('shift-booking/{id}', '\App\Http\Controllers\RoleController@shiftbooking')->name('shift-booking');

Route::get('order/{id}/create', '\App\Http\Controllers\OrderController@createOrder')->name('create-order');
Route::get('booking/{id}/create', '\App\Http\Controllers\BookingController@createBooking')->name('create-booking');
Route::get('bookingorder/{id}/create', '\App\Http\Controllers\BookingorderController@createBookingorder')->name('create-bookingorder');


Route::get('user/{id}/edit', '\App\Http\Controllers\RoleController@userEdit')->name('edit-user');
Route::post('user/{id}/edits', '\App\Http\Controllers\RoleController@userEditid')->name('edit-user-id');


Route::get('otchet/export','\App\Http\Controllers\RoleController@otchetExport')->name('otchet-export');
