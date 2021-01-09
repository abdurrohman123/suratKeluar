<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SuratBalasanController;
use App\Http\Controllers\SuratkeluarController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/surat_balasan',[SuratBalasanController::class, 'index'])->name('surat_balasan.index');

Route::get('/history',[HistoryController::class, 'index'])->name('history.index');


