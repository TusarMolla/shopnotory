<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});
Route::get('signin', [LoginController::class, 'index'])->name('signin');
Route::post('signin', [LoginController::class, 'submit'])->name('signin');
Route::get('signup', [RegistrationController::class, 'index']);
Route::post('signup/store', [RegistrationController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get("dashboard", [DashboardController::class, 'index']);

    //admin
    Route::middleware(['admin'])->group(function () {
        Route::get("admin", [AdminController::class, 'index']);
        Route::prefix('admin')->group(function () {
            Route::get("files", [FileController::class, 'index'])->name("admin.files");
            Route::get("files/create", [FileController::class, 'create'])->name("admin.files.create");
        });
    });
});
