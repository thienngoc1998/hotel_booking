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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login-as');
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');


Route::group(['namespace' => 'backend', 'prefix' => 'admin', 'as' => 'admin.','middleware' => 'auth:admin' ], function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    include_route_files(__DIR__ . '/backend/');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
