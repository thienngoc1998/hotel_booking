<?php


Route::get('service', [\App\Http\Controllers\Backend\Service\ServiceController::class, 'index'])->name('service')->middleware('CheckRoleAdmin0and3');
Route::post('service', [\App\Http\Controllers\Backend\Service\ServiceController::class, 'store'])->name('store-service')->middleware('CheckRoleAdmin0and3');
Route::get('service/create', [\App\Http\Controllers\Backend\Service\ServiceController::class, 'create'])->name('add-service')->middleware('CheckRoleAdmin0and3');
Route::get('service/delete/{id}', [\App\Http\Controllers\Backend\Service\ServiceController::class, 'destroy'])->name('delete-service')->middleware('CheckRoleAdmin0and3');
Route::get('service/update/{id}', [\App\Http\Controllers\Backend\Service\ServiceController::class, 'getFormUpdate'])->name('getFormUpdate-service');
Route::post('service/update/{id}', [\App\Http\Controllers\Backend\Service\ServiceController::class, 'update'])->name('update-service')->middleware('CheckRoleAdmin0and3');
