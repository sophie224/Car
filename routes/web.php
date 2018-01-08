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

Route::get('/', 'IndexController@getAll');

Auth::routes();

Route::post('contact', 'IndexController@postContact');

Route::group(['middleware'=>'admin'], function(){

	Route::get('/adminpanel', 'HomeController@index')->name('adminpanel');

	Route::get('/adminpanel/addcarousel', 'CarouselController@addcarousel');
	Route::POST('adminpanel/addedcarousel', 'CarouselController@addedcarousel');
	Route::get('/adminpanel/carousel', 'CarouselController@carouselList');
	Route::get('/adminpanel/editcarousel/{id}', 'CarouselController@editcarousel');
	Route::POST('/adminpanel/editcarousel/{id}', 'CarouselController@editedcarousel');
	Route::get('/adminpanel/removecarousel/{id}', 'CarouselController@removecarousel');

	Route::get('/adminpanel/addservices', 'ServiceController@addservices');
	Route::POST('/adminpanel/addedservices', 'ServiceController@addedservices');
	Route::get('/adminpanel/services', 'ServiceController@servicesList');
	Route::get('/adminpanel/editservices/{id}', 'ServiceController@editservices');
	Route::POST('/adminpanel/editservices/{id}', 'ServiceController@editedservices');
	Route::get('/adminpanel/removeservices/{id}', 'ServiceController@removeservices');

	Route::get('/adminpanel/addsocial', 'SocialController@addsocial');
	Route::POST('/adminpanel/addedsocial', 'SocialController@addedsocial');
	Route::get('/adminpanel/social', 'SocialController@socialList');
	Route::get('/adminpanel/editsocial/{id}', 'SocialController@editsocial');
	Route::POST('/adminpanel/editsocial/{id}', 'SocialController@editedsocial');

	Route::get('/adminpanel/subscriber', 'SubscriberController@subscriberList');
});





