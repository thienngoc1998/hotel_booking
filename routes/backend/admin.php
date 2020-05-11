<?php

/*
 * All route names are prefixed with 'admin.'.
 */

use App\Http\Controllers\Backend\Admin\AdminController;

Route::get('', [AdminController::class, 'index'])->name('admins')->middleware('CheckRoleAdmin0');
Route::get('create', [AdminController::class, 'create'])->name('create-admin')->middleware('CheckRoleAdmin0');
Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('destroy-admin')->middleware('CheckRoleAdmin0');
Route::post('/store-admin', [AdminController::class, 'store'])->name('store-admin')->middleware('CheckRoleAdmin0');
Route::get('/detail-admin/{id}', [AdminController::class, 'detail'])->name('detail-admin')->middleware('CheckRoleAdmin0');
Route::post('/detail-admin/{id}', [AdminController::class, 'update'])->name('update-detail-admin')->middleware('CheckRoleAdmin0');
//Route::get('/{id}', [AdminController::class, 'detail'])->name('detail-admin');
Route::get('profile/{id}', [AdminController::class, 'getInfo'])->name('profile');
Route::post('profile/editpassword/{id}', [AdminController::class, 'changePassword'])->name('changepassword');
Route::post('profile/{id}', [AdminController::class, 'changeInfo'])->name('changeprofile');

