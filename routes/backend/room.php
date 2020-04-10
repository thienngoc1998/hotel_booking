<?php


/*
 * All route names are prefixed with 'admin.'.
 */
Route::get('room', [\App\Http\Controllers\Backend\Room\RoomController::class, 'getAllRooms'])->name('rooms');
Route::get('add-room', [\App\Http\Controllers\Backend\Room\RoomController::class, 'create'])->name('form-add-room');
Route::get('edit/{id}', [\App\Http\Controllers\Backend\Room\RoomController::class, 'getFormUpdate'])->name('form-update-room');
Route::post('room', [\App\Http\Controllers\Backend\Room\RoomController::class, 'store'])->name('store-room');
