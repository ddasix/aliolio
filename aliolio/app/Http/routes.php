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
Route::get('/',
    [
        'uses' => 'ProductsController@index'
    ]
);
Route::group(
    [
        'prefix'=>'product',
        'middleware'=>['web']
    ],function(){
        Route::post("/",
            [
                'uses' => 'ProductsController@productStore'
            ]
        );
        Route::get('info/{pcode}',
            [
                'uses' => 'ProductsController@productInfo'
            ]
        );
        Route::post('info/{pcode}',
            [
                'uses' => 'ProductsController@productInfo'
            ]
        );
    }
);

Route::group(
    [
        'prefix'=>'post',
        'middleware'=>['auth']
    ],function(){
        Route::get('write',
            [
                'uses' => 'ReviewController@create'
            ]
        );
    }
);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('login',  'Auth\AuthController@showLoginForm');
Route::get('logout', 'Auth\AuthController@logout');
Route::get('socialrRgister', 'Auth\AuthController@socialrRgister');
Route::post('signUp', 'Auth\AuthController@signUp');
Route::get('socialLogin', 'Auth\AuthController@socialLogin');



Route::get('/social/redirect/{provider}',   ['as' => 'social.redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => 'social.handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

Route::auth();
