<?php


Route::get('booking', [\App\Http\Controllers\Backend\Book\BookingController::class, 'index'])->name('booking');
Route::get('booking/change-status/{id}', [\App\Http\Controllers\Backend\Book\BookingController::class, 'changeStatus'])->name('book-change-status');
Route::get('booking/delete/{id}', [\App\Http\Controllers\Backend\Book\BookingController::class, 'destroy'])->name('book-destroy');
