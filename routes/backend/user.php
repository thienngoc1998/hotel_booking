<?php


Route::get('user', [\App\Http\Controllers\Backend\User\UserController::class, 'index'])->name('users');
Route::get('create', [\App\Http\Controllers\Backend\User\UserController::class, 'create'])->name('create-user');
Route::post('create', [\App\Http\Controllers\Backend\User\UserController::class, 'store'])->name('store-user');
Route::get('user/delete/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'destroy'])->name('destroy-user');
Route::get('user/detail/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'detail'])->name('detail-user');
Route::post('user/detail/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'update'])->name('update-user');
Route::post('user/reset-password/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'resetPassword'])->name('reset-password');
Route::get('user/reset-password/{id}', [\App\Http\Controllers\Backend\User\UserController::class, 'getFormResetPassword'])->name('form-reset-password');
