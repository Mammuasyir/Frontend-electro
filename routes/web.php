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
});

//Tester
Route::get('/testLanding', [App\Http\Controllers\LandingController::class, 'testLanding'])->name('testLanding');
Route::get('/testAllProduk', [App\Http\Controllers\LandingController::class, 'testAllProduk'])->name('testAllProduk');
Route::get('/testDetail', [App\Http\Controllers\LandingController::class, 'testDetail'])->name('testDetail');
Route::get('/testBlank-cart', [App\Http\Controllers\LandingController::class, 'testBlankcart'])->name('testBlankcart');
Route::get('/testProfil', [App\Http\Controllers\LandingController::class, 'testProfil'])->name('testProfil');
