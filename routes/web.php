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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::resource('admin/project', 'App\Http\Controllers\Admin\ProjectController');
    Route::resource('admin/job', 'App\Http\Controllers\Admin\JobController');
    Route::resource('admin/job-point', 'App\Http\Controllers\Admin\JobPointController');
});
