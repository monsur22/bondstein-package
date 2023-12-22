<?php

use Bondsteincrud\Crud\Greetr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/call', function () {
    // $response = Http::get('http::localhost:8000/data');
    $response = Http::get('http://localhost:8000/data');


return $response;
});
