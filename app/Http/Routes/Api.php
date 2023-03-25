<?php

use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\FakultasController;
use App\Http\Controllers\Api\ListBankController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('provinsi', [ProvinsiController::class, 'provinsi']);

Route::get('fakultas', [FakultasController::class, 'fakultas']);

Route::get('list_bank', [ListBankController::class, 'list_bank']);
