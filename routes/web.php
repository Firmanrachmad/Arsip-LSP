<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArsipController;

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

Route::get('/', [ArsipController::class, 'index']);


Route::get('/about', [AboutController::class, 'index']);
Route::get('/arsip', [ArsipController::class, 'index']);
Route::get('/add', [ArsipController::class, 'create']);
Route::post('/store', [ArsipController::class, 'store']);
Route::get('/show/{id}', [ArsipController::class, 'show']);
Route::get('/destroy/{id}', [ArsipController::class, 'destroy']);
Route::get('/show/edit/{id}', [ArsipController::class, 'edit']);
Route::get('/show/download/{id}', [ArsipController::class, 'download']);
Route::get('/download/{id}', [ArsipController::class, 'download']);
Route::get('/redirect-to-previous-url', function(){
    return Redirect::to(url()->previous());
});
