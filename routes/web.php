<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\admincontroller;
use App\Http\Controllers\admin\dr;
use App\Http\Controllers\admin\patient;
use App\Http\Controllers\admin\payments;
use App\Http\Controllers\admin\profile;
use App\Http\Controllers\admin\time;
use App\Http\Controllers\admin\users;

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
});

Route::get('/patient', [patient::class, 'patient']);
Route::get('/dr', [dr::class, 'dr']);
Route::get('/payments', [payments::class, 'payments']);
Route::get('/time', [time::class, 'time']);
Route::get('/users', [users::class, 'users']);
Route::get('/profile', [profile::class, 'profile']);

Auth::routes();

Route::get('/dashboard', [admincontroller::class, 'index']);
