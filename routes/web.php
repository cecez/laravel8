<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('retorno-json', function () {
    // Laravel automaticamente retorna arrays em JSON
    return [
        "chave" => "valor",
        "chave2" => "valor2",
        "chave3" => [1,2,3,4]
    ];
});
