<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlientController;
use App\Http\Controllers\ZamowienieController;
use App\Http\Controllers\PracownikController;
use App\Http\Controllers\SamochodController;

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

/* ROUTES FOR KLIENT */
Route::get('klient-list',[KlientController::class,'index']);
Route::get('add-klient',[KlientController::class,'addKlient']);
Route::post('save-klient',[KlientController::class,'saveKlient']);
Route::post('update-klient',[KlientController::class,'updateKlient']);
Route::get('edit-klient/{id}',[KlientController::class,'editKlient']);
Route::get('delete-klient/{id}',[KlientController::class,'deleteKlient']);

/* ROUTES FOR ZAMOWIENIE */
Route::get('zamowienie-list',[ZamowienieController::class,'index']);
Route::get('add-zamowienie',[ZamowienieController::class,'addZamowienie']);
Route::post('save-zamowienie',[ZamowienieController::class,'saveZamowienie']);
Route::post('update-zamowienie',[ZamowienieController::class,'updateZamowienie']);
Route::get('edit-zamowienie/{id}',[ZamowienieController::class,'editZamowienie']);
Route::get('delete-zamowienie/{id}',[ZamowienieController::class,'deleteZamowienie']);

/* ROUTES FOR PRACOWNIK */
Route::get('pracownik-list',[PracownikController::class,'index']);
Route::get('add-pracownik',[PracownikController::class,'addPracownik']);
Route::post('save-pracownik',[PracownikController::class,'savePracownik']);
Route::post('update-pracownik',[PracownikController::class,'updatePracownik']);
Route::get('edit-pracownik/{id}',[PracownikController::class,'editPracownik']);
Route::get('delete-pracownik/{id}',[PracownikController::class,'deletePracownik']);

/* ROUTES FOR SAMOCHOD */
Route::get('samochod-list',[SamochodController::class,'index']);
Route::get('add-samochod',[SamochodController::class,'addSamochod']);
Route::post('save-samochod',[SamochodController::class,'saveSamochod']);
Route::post('update-samochod',[SamochodController::class,'updateSamochod']);
Route::get('edit-samochod/{id}',[SamochodController::class,'editSamochod']);
Route::get('delete-samochod/{id}',[SamochodController::class,'deleteSamochod']);
