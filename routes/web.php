<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KorisnikController;

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

//pregled svih unesenih korisnika
Route::get('korisnici', 'App\Http\Controllers\KorisnikController@index')->name('index');

//pregled samo jednog korisnika
Route::get('show/{id}', 'App\Http\Controllers\KorisnikController@show')->name('show');

//rute za unos korisnika u bazu
Route::get('create-korisnik', 'App\Http\Controllers\KorisnikController@create')->name('create-korisnik');
Route::post('create', 'App\Http\Controllers\KorisnikController@store')->name('create');

//rute za izmjene podataka za korisnika
Route::get('update-korisnik/{id}', 'App\Http\Controllers\KorisnikController@edit')->name('update-korisnik');
Route::post('update', 'App\Http\Controllers\KorisnikController@update')->name('update');

//rute za za brisanje korisnika
Route::get('delete-korisnik.{id}', 'App\Http\Controllers\KorisnikController@delete')->name('delete');
