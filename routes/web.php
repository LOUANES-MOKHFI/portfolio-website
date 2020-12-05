<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['web' , 'admin']], function(){
	Route::get('/admin','AdminController@home')->middleware('auth')->middleware('verified');;
    Route::get('/profil','AdminController@profil')->middleware('auth')->middleware('verified');;
    Route::put('/profil/{id}','AgenceController@update_profil');

	/*Contact*/

	Route::get('/admin/contact','ContactController@index');
    Route::get('/admin/contact/message_lu','ContactController@message_lu');
    Route::get('/admin/contact/message_non_lu','ContactController@message_non_lu');
	Route::get('/admin/contact/corbeille','ContactController@message_deleted');
    Route::get('/admin/contact/{id}','ContactController@show');
	Route::get('/admin/contact/{id}/delete','ContactController@destroy');
    Route::get('/admin/contact/{id}/supprimer','ContactController@delete');
    Route::get('/admin/search-message','ContactController@search_message');
    
     /*admin*/

    Route::resource('/admin/admin','AdminController');
    Route::get('/admin/admin/{id}/delete','AdminController@destroy');
    Route::get('/search-admin','AdminController@search_admin_index');


 /*membre*/

    Route::resource('/admin/membre','MembreController');
    Route::get('/admin/membre/{id}/delete','MembreController@destroy');
    Route::get('/search-membre','MembreController@search_membre_index');

    /*Category*/

    Route::resource('admin/category','CategoryController');
    Route::get('admin/category/{id}/delete', 'CategoryController@destroy');
    Route::get('admin/search_category', 'CategoryController@search_category_admin');
   
     /*projects*/

    Route::resource('admin/projects','PortfolioController');
    Route::get('admin/projects/{id}/delete', 'PortfolioController@destroy');
    Route::get('admin/search_projects', 'PortfolioController@search_project_admin');

    /*SEVICES*/

    Route::resource('admin/services','ServicesController');
    Route::get('admin/services/{id}/delete', 'ServicesController@destroy');

 /*SEVICES SPONSORING*/

    Route::resource('admin/sponsoring','SponsoringController');
    Route::get('admin/sponsoring/{id}/delete', 'SponsoringController@destroy');

    /*technologies*/

    Route::resource('admin/technologies','TechnologiesController');
    Route::get('admin/technologies/{id}/delete', 'TechnologiesController@destroy');


    /* parametre de site */

    Route::get('/admin/sitesetting', 'SiteSettingController@index');
    Route::post('/admin/sitesetting', 'SiteSettingController@store');
    Route::post('/admin/sitesetting/{id}', 'SiteSettingController@update');

Route::get('/admin/newsletter','NewsletterController@view');




});


/*users route*/


Route::group(['middleware' => 'web'], function(){
Route::auth();
Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'TechnologiesController@about')->name('about');
Route::get('/services', 'ServicesController@services')->name('services');
Route::post('/contact','ContactController@store')->name('contact.store');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/portfolio', 'PortfolioController@portfolio')->name('portfolio');

Route::post('/check-subscriber-email/','NewsletterController@checksubscribe');

Route::post('/add-subscriber-email/','NewsletterController@addsubscribe');

Route::get('/commander/{category}', 'CommandeController@commander')->name('commander');


});
