<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
	if(Auth::check()) return Redirect::to("/p/auctions");
	else return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	//NUESTRAS RUTAS

	//Ruta con controlador
	Route::get('/p/auctions', 'App\Http\Controllers\AuctionsController@index')->name('auctions');

	Route::get('/p/bids', 'App\Http\Controllers\BidsController@index')->name('bids');

	//Creamos el metodo get y post, get para entrar en la ruta y post para enviar la informacion de la vista al controlador
	Route::get('/p/auction', 'App\Http\Controllers\AuctionController@index')->name('auction');
	Route::post('/p/auction', 'App\Http\Controllers\AuctionController@CreateAuction')->name('addAuction');

	Route::post('/p/bid', 'App\Http\Controllers\BidIdController@index')->name('bid');
	Route::post('/p/bid/lowerPrice', 'App\Http\Controllers\LowerPriceController@index')->name('LowerPriceController');

	Route::get('/p/check', 'App\Http\Controllers\CheckController@index')->name('check');

	Route::get('/p/myObjects', 'App\Http\Controllers\MyObjectsController@index')->name('myObjects');
	Route::post('/p/myObjects/newObject', 'App\Http\Controllers\MyObjectsNewObjectController@CreateObject')->name('newObject');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

