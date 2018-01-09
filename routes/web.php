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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Siswa
 */
Route::get('/siswa', 'UsersController@index')->name('siswa');
Route::get('/siswa/create', 'UsersController@create')->name('siswaCreate');
Route::post('/siswa', 'UsersController@store')->name('siswaStore');

/**
 * Pertanyaan
 */
Route::get('/pertanyaan', 'QuestionsController@index')->name('pertanyaan');
Route::get('/pertanyaan/create', 'QuestionsController@create')->name('pertanyaanCreate');
Route::post('/pertanyaan', 'QuestionsController@store')->name('pertanyaanStore');

/**
 * Jelajah
 */
Route::get('/step1', 'HomeController@step1')->name('step1');
Route::get('/ranking', 'HomeController@ranking')->name('ranking');
Route::get('/challenge', 'HomeController@challenge')->name('challenge');
Route::post('/challenge', 'HomeController@challengeStore')->name('challengeStore');


Route::get('/step/1/item/boolean', 'HomeController@step1item1')->name('step1item1');
Route::get('/step/1/item/comparison', 'HomeController@step1item2')->name('step1item2');
Route::get('/step/1/item/if', 'HomeController@step1item3')->name('step1item3');


Route::get('/step/1/item/boolean/1', 'HomeController@step1item1question1')->name('step1item1question1');
Route::get('/step/1/item/comparison/1', 'HomeController@step1item2question1')->name('step1item2question1');
Route::get('/step/1/item/if/1', 'HomeController@step1item3question1')->name('step1item3question1');


Route::post('/result', 'HomeController@resultStore')->name('resultStore');