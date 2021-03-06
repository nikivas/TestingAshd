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

Route::get('/home', 'HomeController@index')->name('home');
Route::resources([
    'tests' => 'TestController'
]);

Route::post('/tests/{test}','TestController@check')->name('test.check');
Route::post('/tests/collocation/{test}','TestController@check')->name('test.collocation.check');

Route::get('/crossword', 'CrosswordController@index')->name('crossword');

Route::get('/cube', 'CubeController@index')->name('cube');

Route::post('/flag/check', 'FlagController@check')->name('flagCheck');