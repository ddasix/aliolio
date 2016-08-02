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
Route::group(['prefix'=>'product','middleware'=>['web']],function(){
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

});

Route::group(['prefix'=>'post','middleware'=>['auth']],function(){
    Route::get('write',
        [
            'uses' => 'ReviewController@create'
        ]
    );
});


Route::auth();
