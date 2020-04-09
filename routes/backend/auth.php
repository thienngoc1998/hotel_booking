<?php

use App\Http\Controllers\Auth\LoginController;

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
