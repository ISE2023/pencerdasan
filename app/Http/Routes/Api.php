<?php

use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\DepartemenController;
use App\Http\Controllers\Api\KabupatenController;
use App\Http\Controllers\Api\FakultasController;
use App\Http\Controllers\Api\ListBankController;
use App\Http\Controllers\Api\ShortenerController;
use App\Http\Controllers\UrlController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('provinsi', [ProvinsiController::class, 'provinsi']);

Route::get('departemen', [DepartemenController::class, 'departemen']);

Route::get('kabupaten', [KabupatenController::class, 'kabupaten']);

Route::get('fakultas', [FakultasController::class, 'fakultas']);

Route::get('list_bank', [ListBankController::class, 'list_bank']);

Route::get('desa', [DesaController::class, 'desa']);

Route::get('shortener/{short_url}',[ShortenerController::class, 'getShortener']);

Route::get('url-shortener', [UrlController::class, 'urlshortener']);
Route::post('url-shortener', 'UrlController@shorten');
