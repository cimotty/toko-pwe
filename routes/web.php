<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DenganController1;
use App\Http\Controllers\DenganController2;
use App\Http\Controllers\DenganController3;
use App\Http\Controllers\DenganController4;
use App\Http\Controllers\DenganController5;
use App\Http\Controllers\DenganController6;
use App\Http\Controllers\DenganController7;
use App\Http\Controllers\DenganController8;
use App\Http\Controllers\DenganController9;
use App\Http\Controllers\DenganController10;
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
});

Route::get('/tanpa-controller/1', function () {
    echo '1';
});
Route::get('/tanpa-controller/2', function () {
    echo '2';
});
Route::get('/tanpa-controller/3', function () {
    echo '3';
});
Route::get('/tanpa-controller/4', function () {
    echo '4';
});
Route::get('/tanpa-controller/5', function () {
    echo '5';
});
Route::get('/tanpa-controller/6', function () {
    echo '6';
});
Route::get('/tanpa-controller/7', function () {
    echo '7';
});
Route::get('/tanpa-controller/8', function () {
    echo '8';
});
Route::get('/tanpa-controller/9', function () {
    echo '9';
});
Route::get('/tanpa-controller/10', function () {
    echo '10';
});

Route::get('/dengan-controller/1', [DenganController1::class, 'index']);
Route::get('/dengan-controller/2', [DenganController2::class, 'index']);
Route::get('/dengan-controller/3', [DenganController3::class, 'index']);
Route::get('/dengan-controller/4', [DenganController4::class, 'index']);
Route::get('/dengan-controller/5', [DenganController5::class, 'index']);
Route::get('/dengan-controller/6', [DenganController6::class, 'index']);
Route::get('/dengan-controller/7', [DenganController7::class, 'index']);
Route::get('/dengan-controller/8', [DenganController8::class, 'index']);
Route::get('/dengan-controller/9', [DenganController9::class, 'index']);
Route::get('/dengan-controller/10', [DenganController10::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index']);

