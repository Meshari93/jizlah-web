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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController1@index')->name('home1');
// dashbord route---//
Route::get('/dashbord', 'DashbordController@index')->name('dashbord');

//store  route -----//
Route::prefix('store')->group(function(){
  Route::get('/', 'StoreController@index')->name('store');

  Route::get('/animal', 'AnimalController@index')->name('animal');
  Route::get('/addAnimal', 'AnimalController@create')->name('add.animal');
  Route::post('/storeAnimal', 'AnimalController@store')->name('store.animal');

  Route::get('/healthStatus', 'AnimalHealthController@index')->name('health.animal');
  Route::post('/addsick', 'AnimalSickController@store')->name('addsick.animal');

});

//Sick animal  route -----//
  Route::get('/sick', 'AnimalSickController@index')->name('sick.animal'); //return view of sick
  Route::get('/deleteSick/{id}', 'AnimalSickController@destroy')->name('delete.sick');//  delete sick
  Route::post('/addSickAnimal', 'AnimalHealthController@store')->name('addSickAnimal.animal'); //add Animal Sick


//Cart route ------------//

Route::post('/addCart/{idAinmal}', 'CartController@addCart')->name('addCart');
