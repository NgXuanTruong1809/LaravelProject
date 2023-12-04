<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;

Route::get('admin/users/login', [LoginController::class, 'index']); //tao duong dan  admin/users/login -> truy cap LoginController vao ham index
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::get('admin/main', [MainController::class, 'index'])-> name('admin'); // tên là admin