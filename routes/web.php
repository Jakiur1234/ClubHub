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
Route::get('/events', [RouteController::class,'ric_events'])->name('ric-events');

// FECPC routes
Route::get('/fecpc/home', [RouteController::class,'fecpc_home'])->name('fecpc-home');

// FECPC
Route::get('/fecpcp/home', [RouteController::class,'fecpcp_home'])->name('fecpcp-home');

// FECSA
Route::get('/fecsa/home', [RouteController::class,'fecsa_home'])->name('fecsa-home');
