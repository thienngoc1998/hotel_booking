<?php

/*
 * All route names are prefixed with 'admin.'.
 */

use App\Http\Controllers\Backend\Admin\AdminController;

Route::get('profile/{id}', [AdminController::class, 'getInfo'])->name('profile');
Route::post('profile/editpassword/{id}', [AdminController::class, 'changePassword'])->name('changepassword');
Route::post('profile/{id}', [AdminController::class, 'changeInfo'])->name('changeprofile');

