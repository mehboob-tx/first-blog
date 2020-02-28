<?php

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

Route::get('/','HomeController@index');
Route::get('single','HomeController@single');
Route::get('blog','HomeController@blog');
Route::get('contact','HomeController@contact');
Route::get('admin','HomeController@admin');
Route::get('login','HomeController@login');

Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login','Auth\LoginController@login');

Route::get('register','HomeController@register');
Route::put('admin-register','Auth\RegisterController@create')->name('admin.register');









/*Route::get('/', function(){
	$name = request('name')  ;
	return $name;
});*/
Route::get('posts/{post}',function($post){
	$my=[
		'mypost' => 'hello',
		'otherspost' => 'world'
	];
	/*if(!array_keys_exists( $post , $my)){
		abort(404 , 'aho');
	}*/
	return view('post',[
		'post'=>$my[$post]  ?? 'nothing yet.'
	]);
});



