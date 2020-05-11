<?php


/*
 * All route names are prefixed with 'admin.'.
 */
Route::get('room', [\App\Http\Controllers\Backend\Room\RoomController::class, 'getAllRooms'])->name('rooms')->middleware('CheckRoleAdmin0and2');
Route::get('add-room', [\App\Http\Controllers\Backend\Room\RoomController::class, 'create'])->name('form-add-room')->middleware('CheckRoleAdmin0and2');
Route::get('room/edit/{id}', [\App\Http\Controllers\Backend\Room\RoomController::class, 'getFormUpdate'])->name('form-update-room');
Route::post('room', [\App\Http\Controllers\Backend\Room\RoomController::class, 'store'])->name('store-room')->middleware('CheckRoleAdmin0and2');
Route::get('room/delete/{id}', [\App\Http\Controllers\Backend\Room\RoomController::class, 'destroy'])->name('delete-room')->middleware('CheckRoleAdmin0and2');
Route::post('room/{id}', [\App\Http\Controllers\Backend\Room\RoomController::class, 'update'])->name('update-room')->middleware('CheckRoleAdmin0and2');
