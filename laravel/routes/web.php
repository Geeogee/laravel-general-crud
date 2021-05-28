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

Route::get('/', 'MatchController@home') -> name('home');

Route::get('match/{id}', 'MatchController@show') -> name('show');

Route::get('match/create', 'MatchController@create') -> name('create');
Route::post('match/store', 'MatchController@store') -> name('store');

Route::get('match/edit/{id}', 'MatchController@edit') -> name('edit');
Route::post('match/update/{id}', 'MatchController@update') -> name('update');

Route::get('match/delete/{id}', 'MatchController@delete') -> name('delete');
