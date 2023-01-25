<?php

use App\Http\Controllers\APIController;
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

Route::get('/',[APIController::class, "index"])->name("index");
Route::post("/save",[APIController::class,'saveAccount'])->name('saveAccount');
Route::get('/display', [APIController::class,'display'])->name('display');
Route::get('/delete/{id}',[APIController::class, 'deleteAcc'])->name('deleteAcc');
Route::get('/update/{id}',[APIController::class, 'getAcc'])->name('getAcc');
Route::post('/saveUpdate',[APIController::class, 'saveUpdateAcc'])->name('saveUpdateAcc');