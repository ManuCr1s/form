<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ApplyController;
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
Route::get('/',function(){
    return view('welcome');
});
Route::controller(ProvinceController::class)->group(function () {
    Route::post('/provincia', 'store')->name('province');
    Route::post('/distrito', 'store_district')->name('district');
    Route::post('/oficina', 'show')->name('office');
});
Route::controller(ApplyController::class)->group(function(){
    Route::post('/solicitud', 'store')->name('dates');
});