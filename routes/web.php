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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// dashboard routes
Route::get('/dashboard', 'HomeController@dashboard')->name('Painel Principal');


// membros routes
Route::get('/membros', 'MembrosController@index')->name('Membros');



Route::post('/cadastrarMembro', 'MembrosController@cadastrarMembro')->name('cadastrarMembro');
Route::post('/atualizarMembro', 'MembrosController@atualizarMembro')->name('atualizarMembro');
Route::post('/excluirMembro', 'MembrosController@excluirMembro')->name('excluirMembro');
Route::post('/reativarMembro', 'MembrosController@reativarMembro')->name('reativarMembro');
