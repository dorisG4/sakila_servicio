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
Route::get('admin','FrontController@admin');
// Route::get('contacto','FrontController@Contacto');
// Route::get('reviews','FrontController@reviews');




Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

	//Route::get('admin','FrontController@admin');
	
	Route::resource('category','CategoryController');
	Route::resource('actor','ActorController');
	Route::resource('language','LanguageController');
	Route::resource('film','FilmController');
	Route::resource('stores','StoreController');
	Route::resource('staff','StaffController');
	Route::resource('customers','CustomerController');
	Route::resource('inventory','InvetoryController');
	Route::resource('rental','RentalController');

	//Route::resource('log','LogController');
	
				Route::get('film/{id}/destroy',[
			    'uses' =>'FilmController@destroy',
				'as' => 'film.destroy'
			    ]);

			    Route::get('stores/{id}/destroy',[
			    'uses' =>'StoreController@destroy',
				'as' => 'stores.destroy'
			    ]);

			    Route::get('customers/{id}/destroy',[
			    'uses' =>'CustomerController@destroy',
				'as' => 'customers.destroy'
			    ]);

			    Route::get('staff/{id}/destroy',[
			    'uses' =>'StaffController@destroy',
				'as' => 'staff.destroy'
			    ]);

			    Route::get('rental/{id}/destroy',[
			    'uses' =>'RentalController@destroy',
				'as' => 'rental.destroy'
			    ]);


});



//Route::get('admin','LogController@index');
//Route::resource('admin','LogController');
Route::resource('log', 'LogController');
Route::get('logout','LogController@logout');
// Route::get('/','LogController@index');


// Route::group(['prefix'=>'articles'], function(){
// 	Route::get('view/{id}',
// 			[
// 			'uses' => 'PruebaController@view',	
// 			'as' =>'articlesView']);
// });

Auth::routes();


