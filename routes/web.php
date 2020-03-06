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

Route::get('/', 'AgendamentosController@index')->name('index');
Route::post('/getProfessionals', 'AgendamentosController@getProfessionals');
Route::post('/agendamentos/store', 'AgendamentosController@store')->name('agendamentos.store');
