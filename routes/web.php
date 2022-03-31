<?php

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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store-reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('store-reservation');
Route::get('/list-reservation', [App\Http\Controllers\ReservationController::class, 'lists']);
Route::get('/accept-reservation/{id}', [App\Http\Controllers\ReservationController::class, 'acceptReserv']);
Route::get('/rejecting-reservation/{id}', [App\Http\Controllers\ReservationController::class, 'rejectingReserv']);
Route::get('/reports-excel/{month}', [App\Http\Controllers\ReservationController::class, 'reportExcel']);
Route::get('/reports-pdf/{month}', [App\Http\Controllers\ReservationController::class, 'reportPdf']);
Route::post('/search-reservations-date', [App\Http\Controllers\ReservationController::class, 'searchDate']);

Route::get('/list-users', [App\Http\Controllers\UserController::class, 'index'])->name('lists-users');
Route::get('/edit/{id}/user', [App\Http\Controllers\UserController::class, 'edit']);
Route::put('/update-user/{id}', [App\Http\Controllers\UserController::class, 'update']);



Route::get('/selection-data-base', [App\Http\Controllers\ConfigurationController::class, 'show'])->name('conexionDataBase');
Route::get('/configuration', [App\Http\Controllers\ConfigurationController::class, 'create'])->name('createConf');
Route::get('/list-configurations', [App\Http\Controllers\ConfigurationController::class, 'index'])->name('listConf');
Route::get('/edit/{id}/configuration', [App\Http\Controllers\ConfigurationController::class, 'edit']);
Route::post('/store-configuration', [App\Http\Controllers\ConfigurationController::class, 'store']);
Route::put('/update-configuration/{id}', [App\Http\Controllers\ConfigurationController::class, 'update']);
