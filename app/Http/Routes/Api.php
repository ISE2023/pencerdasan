<?php

use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\DepartemenController;
use App\Http\Controllers\Api\KabupatenController;
use App\Http\Controllers\Api\FakultasController;
use App\Http\Controllers\Api\ListBankController;
<<<<<<< Updated upstream
use App\Http\Controllers\Api\DesaController;
=======
use App\Http\Controllers\Api\UrlShortenerController;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('provinsi', [ProvinsiController::class, 'provinsi']);

Route::get('departemen', [DepartemenController::class, 'departemen']);

Route::get('kabupaten', [KabupatenController::class, 'kabupaten']);

Route::get('fakultas', [FakultasController::class, 'fakultas']);

Route::get('list_bank', [ListBankController::class, 'list_bank']);

<<<<<<< Updated upstream
Route::get('desa', [DesaController::class, 'desa']);
=======
Route::get('url-shortener', [UrlShortenerController::class, 'url-shortener']);

>>>>>>> Stashed changes
