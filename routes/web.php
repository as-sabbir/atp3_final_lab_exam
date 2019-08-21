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

Route::get('/', function () {
    return view('layout');
});

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/home/search', 'HomeController@search')->name('home.search');
Route::get('/home/buy/{sid}', 'HomeController@checkout')->name('home.checkout');
Route::get('/home/payment', 'HomeController@payment')->name('home.payment');
Route::get('/home/payment/thank_you', 'HomeController@thank_you')->name('home.thank_you');


Route::get('/contact', 'HomeController@show_contact')->name('home.show_contact');
Route::post('/contact', 'HomeController@add_contact')->name('home.add_contact');
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/register', 'HomeController@register_view')->name('home.register_view');
Route::post('/register', 'HomeController@add_user')->name('admin.add_user');
Route::get('/login', 'LoginController@login')->name('login.login');
Route::post('/login', 'LoginController@verify');


Route::group(['middleware'=>['sess']],function(){
	Route::group(['middleware'=>['user_admin']], function(){
			
		Route::get('/admin', 'HomeController@admin')->name('home.admin');
		
		Route::get('/admin/profile/{sid}', 'AdminController@profile');
		Route::get('/admin/profile/edit/{sid}', 'AdminController@edit');
		Route::post('/admin/profile/edit/{sid}', 'AdminController@update');
		
		Route::get('/admin/users', 'AdminController@show_users')->name('admin.show_users');
		Route::get('/admin/users/search', 'AdminController@search')->name('admin.search');
		Route::get('/admin/users/delete/{sid}', 'AdminController@delete_user');
		Route::get('/admin/add_book', 'AdminController@add_book_view')->name('admin.add_book_view');
		Route::post('/admin/add_book', 'AdminController@add_book')->name('admin.add_book');
		Route::get('/admin/contact', 'AdminController@show_contact')->name('admin.show_contact');
		Route::post('/admin/contact', 'AdminController@add_contact')->name('admin.add_contact');
		Route::get('/admin/inbox', 'AdminController@inbox')->name('admin.inbox');
		Route::get('/admin/inbox/delete/{sid}', 'AdminController@delete_message');
			
	});
	
		Route::group(['middleware'=>['user_manager']], function(){
		Route::get('/manager', 'HomeController@manager')->name('home.manager');
			
	});
	
	Route::group(['middleware'=>['user_representative']], function(){
		Route::get('/customer', 'HomeController@representative')->name('home.representative');
		Route::get('/representative/profile/{sid}', 'RepresentativeController@profile');
		Route::get('/representative/profile/edit/{sid}', 'RepresentativeController@edit');
		Route::post('/representative/profile/edit/{sid}', 'RepresentativeController@update');
		Route::get('/representative/Ad', 'RepresentativeController@view_ad')->name('representative.view_ad');
		Route::get('/representative/add_ad', 'RepresentativeController@add_ad_view')->name('representative.add_ad_view');
		Route::post('/representative/add_ad', 'RepresentativeController@add_ad')->name('representative.add_ad');
		
		Route::get('/representative/ad/edit/{sid}', 'RepresentativeController@edit_ad');
		Route::post('/representative/ad/edit/{sid}', 'RepresentativeController@update_ad');
		
		Route::get('/representative/ad/delete/{sid}', 'RepresentativeController@delete_ad');
		Route::get('/representative/contact', 'RepresentativeController@show_contact')->name('representative.show_contact');
		Route::post('/representative/contact', 'RepresentativeController@add_contact')->name('representative.add_contact');
		Route::get('/representative/inbox', 'RepresentativeController@inbox')->name('representative.inbox');
		Route::get('/representative/inbox/delete/{sid}', 'RepresentativeController@delete_message');
			
	});
	
	Route::get('/logout', 'LogoutController@index')->name('logout.index');
});













