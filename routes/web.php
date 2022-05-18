<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/territory', 'App\Http\Controllers\TerritoryController@index')->middleware('auth');
Route::get('/{id}/doctor', [App\Http\Controllers\DoctorController::class, 'index'])->middleware('auth');
Route::get('/{id}/detailgift', [App\Http\Controllers\DetailgiftController::class, 'index'])->middleware('auth');
Route::post('/submit', 'App\Http\Controllers\DetailgiftController@submit');
Route::get('/add_doctor', function () {
    return view('doctor.add')->with('main_menu_name','create')->with('sub_menu_name','add_doctor');
})->middleware('auth');
Route::post('/submitdoctor', 'App\Http\Controllers\DoctorController@submitdoctor');
