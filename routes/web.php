<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;

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
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('contactanos', [ContactanosController::class, "index"])->name("contactanos.index");
Route::post("contactanos" , [ContactanosController::class, "store"])->name("contactanos.store");