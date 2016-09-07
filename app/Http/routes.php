<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FrontController@index');

Route::get('formations', 'FrontController@showFormation');

Route::get('production', 'FrontController@showProduction');

Route::get('article/{id}', 'FrontController@showArticle');


Route::any('login', 'LoginController@login');

Route::any('logout', 'LoginController@logout');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::resource('article', 'ArticleController');

    Route::get('getarticle', 'ArticleController@createArticle');

    Route::resource('publish', 'PublishController');

    Route::resource('index', 'BackController');


});