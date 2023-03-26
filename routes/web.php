<?php

use App\Http\Controllers\registerController;

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

require app_path('Http/Routes')."/Web.php";

Route::get('/register', function () {
    return view('pages/register');
});

Route::post('/register', [registerController::class, 'getData']);