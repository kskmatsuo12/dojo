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
    return view('welcome');
});

Auth::routes();


// Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/profile', 'HomeController@profile');
    Route::get('/profile2', 'HomeController@profile2');
    Route::get('/profile3', 'HomeController@profile3');
    Route::get('/issues', 'HomeController@issues');
    Route::get('/my', 'HomeController@my');
    Route::get('/sitemap', 'HomeController@sitemap');

    Route::get('/issues/{id}', 'HomeController@issuesIndex');
    Route::get('/proposal', 'HomeController@proposal');
    Route::get('/comfirm', 'HomeController@comfirm');

    Route::get('/my/{id}', 'HomeController@myIndex');

    Route::get('/messages', 'HomeController@messages');
    Route::get('/messages/{id}', 'HomeController@messagesIndex');
    Route::get('/messages/group/{id}', 'HomeController@messagesGroup');

    Route::get('/issues/assessment', 'HomeController@assessment');

// });
