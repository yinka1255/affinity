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
    return view('admin/index');
});
Route::get('index', function () {
    return view('welcome');
});

Route::get('login', array('as' => 'login', function () {
    return view('login');
}));

Route::post('login','UserController@login');

Route::get('admin/admin', 'AdminController@index');

Route::post('admin/create_admin','AdminController@create');

//});	
