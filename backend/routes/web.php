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

Route::get('/setlists/{id}/songs', 'App\Http\Controllers\SongController@index')->name('songs.index');
Route::get('/setlists/create', 'App\Http\Controllers\SetlistController@showCreateForm')->name('setlists.create');
Route::post('/setlists/create', 'App\Http\Controllers\SetlistController@create');