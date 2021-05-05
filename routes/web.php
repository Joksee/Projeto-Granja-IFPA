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

/*Rota dos Lotes, listagem dos lotes*/
Route::resource('/Lotes', 'LoteController');

/*Rota dos Frangos, que estão dentro do parametro Lotes, listagem dos lotes*/
Route::resource('/Frangos', 'FrangoController');

/*Rota das vacinas*/
Route::resource('/Vacinas', 'VacinaController');

/*Rota das rações*/
Route::resource('/Racaos',  'RacaoController');
Route::resource('/Financeiros',  'FinanceiroController');
Route::resource('/Operacaos',  'OperacaoController');



/*Rota dos Frangos*/


Route::get('/', function () {
    return redirect()->route('Lotes.index');
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/