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
    Route::post('/product/info/{pcode}',
        [
            'uses' => 'ProductsController@productInfo'
        ]
    );
    Route::post("/product",
        [
            'uses' => 'ProductsController@productStore'
        ]
    );
    Route::get('/product/info/{pcode}',
        [
            'uses' => 'ProductsController@productInfo'
        ]
    );

    Route::get('/post/write',
        [
            'uses' => 'ReviewController@create'
        ]
    );