<?php


Route::get('review', [\App\Http\Controllers\Backend\Review\ReviewController::class, 'index'])->name('review');
Route::get('review/block/{id}', [\App\Http\Controllers\Backend\Review\ReviewController::class, 'blockReview'])->name('block-review');
