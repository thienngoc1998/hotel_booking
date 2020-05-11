<?php


Route::get('article', [\App\Http\Controllers\Backend\Article\ArticleController::class, 'index'])->name('article');
Route::get('article/create', [\App\Http\Controllers\Backend\Article\ArticleController::class, 'create'])->name('article-create');
Route::post('article/create', [\App\Http\Controllers\Backend\Article\ArticleController::class, 'store'])->name('article-store');
Route::get('article/{id}', [\App\Http\Controllers\Backend\Article\ArticleController::class, 'detail'])->name('article-detail');
Route::post('article/{id}', [\App\Http\Controllers\Backend\Article\ArticleController::class, 'update'])->name('article-update');
Route::get('article/delete/{id}', [\App\Http\Controllers\Backend\Article\ArticleController::class, 'destroy'])->name('article-delete')->middleware('CheckRoleAdmin0');
