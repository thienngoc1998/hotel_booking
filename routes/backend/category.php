<?php



use App\Http\Controllers\Backend\Category\CategoryController;
/*
 * All route names are prefixed with 'admin.'.
 */
Route::get('category', [CategoryController::class, 'index'])->name('categories');
Route::get('category/create', [CategoryController::class, 'create'])->name('create-category');
Route::get('category/{id}', [CategoryController::class, 'detail'])->name('detail-category');
Route::post('category/{id}', [CategoryController::class, 'update'])->name('update-category');

Route::post('category', [CategoryController::class, 'store'])->name('store-category');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy-category');
