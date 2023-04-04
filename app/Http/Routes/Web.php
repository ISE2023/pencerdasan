<?php

use App\Http\Controllers\Web\Pages\LoginPage;
use App\Http\Controllers\Web\Pages\RegisterPage;
use App\Http\Controllers\registerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




//Route::get('/', [RegisterPage::class, 'render']);
Route::get('/login', [LoginPage::class, 'render']);

//Route::post('/register', [registerController::class, 'getData']);

Route::view('', 'pages/register');