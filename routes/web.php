<?php

use App\Http\Controllers\BegituSulidController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/',[BegituSulidController::class, 'index'])->name("index");
Route::post('/store',[BegituSulidController::class, 'store'])->name("store");
Route::post('deleteActivity/{id}',[BegituSulidController::class,'deleteActivity'])->name('deleteActivity');
Route::get('edit/{id}', [BegituSulidController::class, 'edit'])->name('edit');
Route::post('update{id}', [BegituSulidController::class, 'update'])->name('update');

//register
Route::get('register',[RegisterController::class,'register'])->name('register');
Route::post('registerStore',[RegisterControllers::class,'store'])->name('registerStore');

//login
Route::get('login',[LoginController::class, 'index'])->name('login');