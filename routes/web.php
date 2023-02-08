<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProjetoController;


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

Route::get('/contatos/contato', [ContatoController::class, 'enviar']);

Route::post('/contatos', [ContatoController::class, 'store']);

Route::get('/portfolios/portfolios-projeto', [ProjetoController::class, 'enviar']);

Route::post('/portfolios', [ProjetoController::class, 'store']);

Route::get('/portfolio', [ProjetoController::class, 'index']);

Route::get('/sobre', function () {
    return view('sobre');
});
