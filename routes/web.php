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

Route::get('/hello', function () {
    return view('HelloWorld');
});

Route::get('/prova', function () {
    return view('MyFirstPage', [
        "chiave1" => "valore1",
        "chiave2" => "valore2",
        "chiave3" => "valore3",
        "chiave4" => [
            "chiave1liv2" => "valore1liv2",
            "chiave2liv2" => "valore2liv2",
            "chiave3liv2" => "valore3liv2",
            "chiave4liv2" => [
                "chiave1liv3" => "valore1liv3",
                "chiave2liv3" => "valore2liv3",
                "chiave3liv3" => "valore3liv3",
                "chiave4liv3" => "valore4liv3",
            ]
        ]
    ]);
});