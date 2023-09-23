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

Route::get('/', function () {
    return view('backend.dashboard');
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
