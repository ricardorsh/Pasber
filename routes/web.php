<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AutenticateSessionController;

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
/**
 * Route::get('/', function () {
 *  return view('auth.login');
 *  })->name('login');
 *
 */

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AutenticateSessionController::class, 'store']);
Route::get('/', [LoginControler::class, 'index'])->name('home');
//Clients
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/create', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::post('/client/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('/client/{id}/delete', [ClientController::class, 'delete'])->name('client.delete');


//Users
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}', [UserController::class, 'update'])->name('user.update');
//auth

