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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\DashboardController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('home/login', [DashboardController::class, 'getFormLogin'])->name('getFormLogin');
Route::get('home/register', [DashboardController::class, 'getFormRegister'])->name('getFormRegister');
Route::post('home/register', [DashboardController::class, 'registerUser'])->name('user-register');
Route::post('home/login', [DashboardController::class, 'login'])->name('login-user');
Route::group(['namespace' => 'frontend','as' => 'frontend.'], function () {
    Route::get('trangchu', [DashboardController::class, 'getHome'])->name('home-hotel');
    Route::get('list-room', [DashboardController::class, 'getListRoom'])->name('list-room');
    Route::post('get-room', [DashboardController::class, 'getListRoomRes'])->name('list-room');
    Route::get('room/{id}', [DashboardController::class, 'getDetailRoom'])->name('detail-room');
    Route::get('reset-password', [DashboardController::class, 'getFormReset'])->name('reset-pass');
    Route::post('reset-password', [DashboardController::class, 'resetPasswordUser'])->name('reset-pass-user');
    Route::get('availability', [DashboardController::class, 'getAvailability'])->name('availability');
    Route::get('select-room', [DashboardController::class, 'selectRoom'])->name('select-room');
    Route::get('booking/{id}', [DashboardController::class, 'bookingRoom'])->name('booking-room');
    Route::post('confirm', [DashboardController::class, 'confirmBookingRoom'])->name('confirm-booking-room');

});
Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login-as');
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');


Route::group(['namespace' => 'backend', 'prefix' => 'admin', 'as' => 'admin.','middleware' => 'auth:admin' ], function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    include_route_files(__DIR__ . '/backend/');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
