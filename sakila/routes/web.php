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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@Contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');


	Route::resource('category','CategoryController');
	Route::resource('actor','ActorController');
	Route::resource('language','LanguageController');
	Route::resource('film','FilmController');

	Route::resource('staff','StaffController');
	


// Route::group(['prefix'=>'articles'], function(){
// 	Route::get('view/{id}',
// 			[
// 			'uses' => 'PruebaController@view',	
// 			'as' =>'articlesView']);
// });




