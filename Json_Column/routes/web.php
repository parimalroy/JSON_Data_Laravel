<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create',[UserController::class,'create']);
Route::get('/index',[UserController::class,'index']);
Route::get('/order',[UserController::class,'findOrderBy']);
Route::get('/update',[UserController::class,'update']);
Route::get('/delete',[UserController::class,'delete']);
