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

Route::get('/', 'DashboardController@index')->name('dashboard');


Route::get('/login2', function () {
    return view('auth.login2');
});


Auth::routes();


Route::post('/pagador', 'PagadorController@index')->name('dashboard');


Route::get('{path}', 'DashboardController@index')->where('path', '([A-z\d-\/_\.]+)?');
