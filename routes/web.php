<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//'/login--> memanggin class yang memanggil index
Route::get('/login', [loginController::class,'index']);
Route::post('/php/login', [loginController::class,'login']);