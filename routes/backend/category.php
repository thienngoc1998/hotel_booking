<?php



use App\Http\Controllers\Backend\Category\CategoryController;
/*
 * All route names are prefixed with 'admin.'.
 */
Route::get('category', [CategoryController::class, 'index'])->name('categories');
Route::get('category/create', [CategoryController::class, 'create'])->name('create-category')->middleware('CheckRoleAdmin0');
Route::get('category/{id}', [CategoryController::class, 'detail'])->name('detail-category')->middleware('CheckRoleAdmin0');
Route::post('category/{id}', [CategoryController::class, 'update'])->name('update-category')->middleware('CheckRoleAdmin0');

Route::post('category', [CategoryController::class, 'store'])->name('store-category')->middleware('CheckRoleAdmin0');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy-category')->middleware('CheckRoleAdmin0');
