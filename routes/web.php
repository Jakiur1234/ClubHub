<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;

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

Route::get('/', [RouteController::class, 'home'])->name('home');

// Ric routes
Route::get('/ric/home', [RouteController::class,'ric_home'])->name('ric-home');

// FECPC routes
Route::get('/fecpc/home', function () {
    return view('home');
})->name('fecpcp-home');

// FECPC
Route::get('/fecpcp/home', function () {
    return view('home');
})->name('fecpc-home');

// FECSA
Route::get('/fecsa/home', function () {
    return view('home');
})->name('fecsa-home');
