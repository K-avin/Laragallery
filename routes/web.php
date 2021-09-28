<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;

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

Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'save'])->name('save-images')->middleware('auth');
Route::get('/detailspage', [App\Http\Controllers\HomeController::class, 'detailsview'])->name('detailspage-view');
Route::get('delete-album/{id}', [App\Http\Controllers\HomeController::class, 'deleteAlbum']);