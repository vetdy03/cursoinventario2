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
Route::get('/ejemplo', [ControllerSistema::class, 'ejemplo1']); //el segndo ejemplo es la funcion del metodo
