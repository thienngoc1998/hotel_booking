<?php



use App\Http\Controllers\Backend\Category\CategoryController;
/*
 * All route names are prefixed with 'admin.'.
 */
Route::get('category', [CategoryController::class, 'index'])->name('categories');
Route::post('category', [CategoryController::class, 'store'])->name('store-category');
