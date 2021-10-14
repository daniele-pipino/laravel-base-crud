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

Route::get('/',  function () {
    return view('home');
})->name('home');

// rotta per i comic trsahati
Route::get('/comics/trash', 'ComicController@trash')->name('comics.trash');

Route::resource('comics', 'ComicController');
