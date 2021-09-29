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


Route::group(['middleware' => ['auth', 'ceklevel:administrator,user,admin']],function(){

	Route::get('/', 'DashboardController@index');
	//Index List Inventaris
	Route::get('/inventaris', 'InventarisController@index');
	//Index List Maintenance
	Route::get('/inventaris/maint', 'InventarisController@maint');
	Route::get('/inventaris/{id}/clean', 'InventarisController@clean');

	Route::get('/profile', 'ProfileController@index');

	Route::get('/website', 'WebsiteController@index');

	Route::get('/author', 'AuthorController@index');

	Route::get('/inventaris/printlist', 'InventarisController@printlist');


});


//HAK AKSES SPV
Route::group(['middleware' => ['auth', 'ceklevel:administrator,admin']],function(){
	Route::post('/inventaris/create', 'InventarisController@create');
	Route::get('/inventaris/{id}/edit', 'InventarisController@edit');
	Route::post('/inventaris/{id}/update', 'InventarisController@update');
	Route::get('/inventaris/{id}/delete', 'InventarisController@delete');
	Route::get('/inventaris/{id}/printclean', 'InventarisController@printclean');

	Route::get('/karyawan', 'KaryawanController@index');
	Route::post('/karyawan/create', 'KaryawanController@create');
	Route::get('/karyawan/{id}/edit', 'KaryawanController@edit');
	Route::post('/karyawan/{id}/update', 'KaryawanController@update');
	Route::get('/karyawan/{id}/delete', 'KaryawanController@delete');



});


//HAK AKSES TEKNISI
Route::group(['middleware' => ['auth', 'ceklevel:administrator,user']],function(){
	Route::post('/inventaris/{id}/addrawat', 'InventarisController@addrawat');
	Route::get('/inventaris/{id}/{idclean}/deleteclean', 'InventarisController@deleteclean');
});




