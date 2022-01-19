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
Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage'])->name('welcome');

// Public views
Route::get('/about', [App\Http\Controllers\AboutUsController::class, 'aboutUs'])->name('view.aboutus');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('view.services');
Route::get('/blogs', [App\Http\Controllers\blogController::class, 'blogs'])->name('view.blogs');
Route::get('/blog', [App\Http\Controllers\blogController::class, 'singleBlog'])->name('view.single_blog');
Route::get('/contact', [App\Http\Controllers\contactController::class, 'contactUs'])->name('view.contact');

Auth::routes();

// Admin
Route::get('manager/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'showDashboard'])->name('view.dashboard');
Route::get('manager/mytasks', [App\Http\Controllers\Admin\TasksController::class, 'showTasks'])->name('view.tasks');
Route::get('manager/setting', [App\Http\Controllers\Admin\ProfileSettingController::class, 'profileSetting'])->name('view.profile-setting');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');