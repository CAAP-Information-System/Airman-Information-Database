<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ainmenController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EndorsingOfficerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('airmens', ainmenController::class);
Route::get('/search/', 'ainmenController@search')->name('search');

Route::resource('transactions', TransactionController::class);
Route::resource('officers', EndorsingOfficerController::class);
