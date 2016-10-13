<?php

/**
*Home
*/

Route::get('/', [
      'uses'=> '\Chatty\Http\Controllers\HomeController@index',
      'as'=> 'home',
	]);



/**
*Auth

*/
Route::get('/signup', [
       'uses' =>'\Chatty\Http\Controllers\AuthController@getSignup',
       'as' =>'auth.signup',
       
       


	]);



