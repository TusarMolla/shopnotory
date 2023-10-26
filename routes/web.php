<?php

namespace App\Http\Controllers;
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

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index');
});

Route::get('/dashboard',function(){
    return 123;
});
Route::prefix('/dashboard')->group(function () {
    Route::get('/a',function(){
        return 123;
    });
    Route::controller(FileController::class)->group(function(){
        Route::get('files','index')->name('files');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
