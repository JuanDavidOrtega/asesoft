<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ApiController;
use Laravel\Passport\Passport;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Rutas de registro y login
// Configurar Passport en las rutas
// Rutas de autenticación con middleware 'auth'
Route::middleware('auth:sanctum')->group(function () {
    //Route::post('/register', 'AuthController@register');
    // routes/api.php
    Route::post('/register', 'Auth\ApiController@register');

    Route::post('/login', 'Auth\ApiController@login');
});