<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlientController;

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

Route::get('klient-list',[KlientController::class,'index']);
Route::get('add-klient',[KlientController::class,'addKlient']);
Route::post('save-klient',[KlientController::class,'saveKlient']);
Route::post('update-klient',[KlientController::class,'updateKlient']);
Route::get('edit-klient/{id}',[KlientController::class,'editKlient']);
Route::get('delete-klient/{id}',[KlientController::class,'deleteKlient']);

