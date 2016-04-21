<?php
//use Goutte\Client as GoutteClient;
//use GuzzleHttp\Client as GuzzleClient;
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
Route::get('/', 'ProductController@index');
Route::get('/products/write', function() {
	return view('products.write');
});

Route::controller('products','ProductController');

//Route::post('/products/write', function() {
//	return Redirect::to('/products/detal/1');
//});

Route::get('/products/promo/{id}', function($id) {
	$item = [];

	return view('products.promo',['item'=>$item]);
});

Route::get('productsDetail/{id}', ['uses'=>'ProductController@showDetail', 'https' => false]);

Route::get('/products/cate/', function() {
	$cates = [];
	return view('products.cate.cate',['cates'=>$cates]);
});

Route::get('/products/cate/list/{id}', function($id) {
	$cates = [];
	return view('products.cate.list',['cates'=>$cates]);
});

Route::get('/products/result', function() {
	$cates = [];
	return view('products.result',['cates'=>$cates]);
});

Route::get('/products/result_feed', function() {
	$cates = [];
	return view('products.result_feed',['cates'=>$cates]);
});

Route::get('/user/clip', function() {
	$detail = [];
	return view('user.clip',['detail'=>$detail]);
});

Route::get('/user/profile', function() {
	$detail = [];
	return view('user.profile',['detail'=>$detail]);
});

Route::get('/user/signin', function() {
	$detail = [];
	return view('user.signin',['detail'=>$detail]);
});

Route::get('/user/signout', function() {
	$detail = [];
	echo "SIGNOUT";
	return Redirect::to('/');
});

Route::get('/user/signup', function() {
	$detail = [];
	return view('user.signup',['detail'=>$detail]);
});

Route::get('/user/agreement', function() {
	$detail = [];
	return view('user.agreement',['detail'=>$detail]);
});

Route::get('/custom/guide', function() {
	$detail = [];
	return view('custom.guide.list',['detail'=>$detail]);
});

Route::get('/custom/guide/{id}', function($id) {
	$detail = [];
	return view('custom.guide.detail',['detail'=>$detail]);
});

Route::get('/custom/feedback', function() {
	$detail = [];
	return view('custom.feedback.write',['detail'=>$detail]);
});

Route::get('/custom/faq', function() {
	$detail = [];
	return view('custom.faq.list',['detail'=>$detail]);
});

Route::get('/custom/faq/{id}', function($id) {
	$detail = [];
	return view('custom.faq.detail',['detail'=>$detail]);
});

Route::get('/aboutus', function() {
	$detail = [];
	return view('aboutus.detail',['detail'=>$detail]);
});

Route::get('/auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
