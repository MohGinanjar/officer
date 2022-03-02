<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add')->middleware('auth');
Route::post('/adddata', [App\Http\Controllers\HomeController::class, 'adddata'])->name('adddata')->middleware('auth');
Route::get('/home/editdata/{id}', [App\Http\Controllers\HomeController::class, 'editdata'])->name('editdata')->middleware('auth');
Route::post('/home/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit')->middleware('auth');
Route::get('/home/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete')->middleware('auth');
Auth::routes();

