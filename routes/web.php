<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::get('/api', [ApiController::class, 'apiRequest'])->name('api');
// Route::post('/api', [ApiController::class, 'apiRequestPost'])->name('api.post');
Route::get('/api', 'App\Http\Controllers\ApiController@index')->name('api');
Route::post('/post', 'App\Http\Controllers\ApiController@post');
