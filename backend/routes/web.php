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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/setlists/{id}/songs', 'App\Http\Controllers\SongController@index')->name('songs.index');

// リスト追加
Route::get('/setlists/create', 'App\Http\Controllers\SetlistController@showCreateForm')->name('setlists.create');
Route::post('/setlists/create', 'App\Http\Controllers\SetlistController@create');

// 曲追加
Route::get('/setlists/{id}/songs/create', 'App\Http\Controllers\SongController@showCreateForm')->name('songs.create');
Route::post('/setlists/{id}/songs/create', 'App\Http\Controllers\SongController@create');

// 曲編集
Route::get('/setlists/{id}/songs/{song_id}/edit', 'App\Http\Controllers\SongController@showEditForm')->name('songs.edit');
Route::post('/setlists/{id}/songs/{song_id}/edit', 'App\Http\Controllers\SongController@edit');

