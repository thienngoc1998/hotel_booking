<?php


Route::get('user', [\App\Http\Controllers\Backend\User\UserController::class, 'index'])->name('users')->middleware('CheckRoleAdmin0');
Route::get('create-user', [\App\Http\Controllers\Backend\User\UserController::class, 'create'])->name('create-user')->middleware('CheckRoleAdmin0');
Route::post('create', [\App\Http\Controllers\Backend\User\UserController::class, 'store'])->name('store-user')->middleware('CheckRoleAdmin0');
Route::get('user/delete/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'destroy'])->name('destroy-user')->middleware('CheckRoleAdmin0');
Route::get('user/detail/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'detail'])->name('detail-user')->middleware('CheckRoleAdmin0');
Route::post('user/detail/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'update'])->name('update-user')->middleware('CheckRoleAdmin0');
Route::post('user/reset-password/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'resetPassword'])->name('reset-password')->middleware('CheckRoleAdmin0');
Route::get('user/reset-password/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'getFormResetPassword'])->name('form-reset-password')->middleware('CheckRoleAdmin0');
