<?php

use App\Http\Controllers\Api\ProjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix'=>'projects'], function() {
    Route::get('/', [App\Http\Controllers\Api\ProjectsController::class, 'index']);
    Route::get('/{id}', [App\Http\Controllers\Api\ProjectsController::class, 'show']);
});
Route::group(['prefix'=>'jobs'], function() {
    Route::get('/', [App\Http\Controllers\Api\JobsController::class, 'index']);
    Route::get('/{id}', [App\Http\Controllers\Api\JobsController::class, 'show']);
});
