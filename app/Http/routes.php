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

Route::get('/', 'PagesController@home');
// Route::get('about', 'PagesController@about');

//database stuff
// show all cards
Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

// create new cards
//Route::get('cards/create', 'CardsController@create');

// post request to post to cards
// Route::post('cards', 'CardsController@store');
