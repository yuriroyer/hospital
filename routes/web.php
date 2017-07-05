<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::prefix('medico')->group(function() {
    Route::get('adicionar-ficha', 'MedicoController@adicionarFicha')->name('adicionar-ficha');
    Route::post('adicionar-ficha', 'MedicoController@storeAdicionarFicha');

    Route::get('minha-conta', 'MedicoController@minhaConta')->name('minha-conta');
    Route::patch('minha-conta', 'MedicoController@updateMinhaConta');
});