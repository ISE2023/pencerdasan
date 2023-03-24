<?php

use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\DepartemenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('provinsi', [ProvinsiController::class, 'provinsi']);

Route::get('departemen', [DepartemenController::class, 'departemen']);
