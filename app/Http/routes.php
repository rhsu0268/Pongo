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

Route::get('/', 'IndexController@getIndex');


Route::get('/createAccount', function() {
    return "User account";
});

Route::post('/createAccount', function() {
    return "User account (post)";
});

Route::get('/signIn', function() {
    return "Sign in";
});

Route::post('/signIn', function() {
    return "Sign in (post)";
});

Route::get('userHomePage', function() {
    return "User Home Page";
});

Route::get('/addItem', 'AddItemController@getPage');
Route::get('/browseItems', 'BrowseItemsController@getPage');
