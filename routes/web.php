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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//CEK HASH PASSWORD
Route::get('/hash', 'PasswordController@hash');


Route::group(['middleware' => ['auth', 'ceklevel:administrator,teknisi']],function(){

	Route::get('/', 'DashboardController@index');

	Route::get('/inventaris', 'InventarisController@index');

	Route::get('/inventaris/{id}/clean', 'InventarisController@clean');
	Route::get('/inventaris/{id}/{idclean}/deleteclean', 'InventarisController@deleteclean');

	Route::get('/inventaris/{id}/incident', 'InventarisController@incident');
	Route::get('/inventaris/{id}/{idincident}/deleteincident', 'InventarisController@deleteincident');


	Route::post('/inventaris/{id}/addrawat', 'InventarisController@addrawat');
	Route::post('/inventaris/{id}/addganti', 'InventarisController@addganti');

	Route::get('/maintenance', 'MaintenanceController@index');

	Route::get('/profile', 'ProfileController@index');

	Route::get('/website', 'WebsiteController@index');

	Route::get('/author', 'AuthorController@index');


 });


//HAK AKSES ADMIN
Route::group(['middleware' => ['auth', 'ceklevel:administrator']],function(){
	Route::post('/inventaris/create', 'InventarisController@create');
	Route::get('/inventaris/{id}/edit', 'InventarisController@edit');
	Route::post('/inventaris/{id}/update', 'InventarisController@update');
	Route::get('/inventaris/{id}/delete', 'InventarisController@delete');
	Route::get('/inventaris/{id}/printclean', 'InventarisController@printclean');
	Route::get('/inventaris/{id}/printincident', 'InventarisController@printincident');

	Route::get('/karyawan', 'KaryawanController@index');
	Route::post('/karyawan/create', 'KaryawanController@create');
	Route::get('/karyawan/{id}/edit', 'KaryawanController@edit');
	Route::post('/karyawan/{id}/update', 'KaryawanController@update');
	Route::get('/karyawan/{id}/delete', 'KaryawanController@delete');

});

//HAK AKSES USER
Route::group(['middleware' => ['auth', 'ceklevel:teknisi']],function(){

});



