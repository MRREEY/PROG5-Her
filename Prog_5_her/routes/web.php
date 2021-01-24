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

Route::get('/', function () {
    return view('welcome');
});

route::get('index', 'HomeController@show');
route::get('/animes/create', 'AnimesItemController@create');
route::post('/animes', 'AnimesItemController@store');
route::get('/animes/{id}', 'AnimesItemController@show')->name('show');
route::get('/seasonal', 'AnimesItemController@index')->name('animes.index')->middleware('auth');
route::get('/animes/{id}/edit', 'AnimesItemController@edit')->name('edit');
route::put('/animes/{id}', 'AnimesItemController@update')->name('update');
//route::put('/animes/{id}/delete', 'AnimesItemController@destroy')->name('destroy');

Route::middleware('auth')->group(function(){
    route::get('/animes/create', 'AnimesItemController@create');
    route::post('/animes', 'AnimesItemController@store');
});
Route::get('listAnime', function () {

    $animesItem = DB::table('animes_items')->get();

    return view('listAnime', ['anime' => $animesItem]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
