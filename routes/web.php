<?php

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

use App\Http\Controllers\ControllerSistema;

Route::get('/', function () {
    return view('welcome');
});

//metodo get son para ir de un menu a otro
Route::get('/ejemplo1', [ControllerSistema::class, 'ejemplo1']); //el primero es la ruta y el segndo ejemplo es la funcion, el metodo
Route::get('/ejemplo2', [ControllerSistema::class, 'ejemplo2']); //el segndo ejemplo es la funcion, el metodo
Route::get('/categoria', [ControllerSistema::class, 'categoria']); //el segndo ejemplo es la funcion, el metodo
Route::get('/producto', [ControllerSistema::class, 'producto']); //el segndo ejemplo es la funcion, el metodo

