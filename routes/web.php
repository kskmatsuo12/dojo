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

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/news', function () {
    return view('news');
});


Auth::routes();


// Route::group(['middleware' => 'auth'], function () {
    //ユーザーのホーム画面
    Route::get('/home', 'HomeController@index');
    //profileを表示する画面
    Route::get('profile_view', 'HomeController@profile_view');
    Route::get('profile2_view', 'HomeController@profile2_view');
    Route::get('profile3_view', 'HomeController@profile3_view');
    //profileにポストするコントローラー
    Route::get('/profile', 'HomeController@profile');
    //profile2にポストするコントローラー
    Route::get('/profile2', 'HomeController@profile2');
    //profile2-2にポストするコントローラー
    Route::post('/profile2Store', 'HomeController@profile2Store');
    
    //案件一覧ページ
    Route::get('/issues', 'HomeController@issues');
    //案件管理ページ
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

    Route::get('/logout', 'HomeController@logout');
    //ユーザーの表示だけここまで

// });
// ユーザーがログインしていないと入れないページ


// クライアントはここより下に！
// クライアントのログインは優先度低めで！
    Route::get('/clients/login_form', 'ClientsController@loginForm');
    Route::get('/clients/register_form', 'ClientsController@registerForm');
    // Route::get('/clients/home', 'ClientsController@home');
    Route::get('/clients/profile', 'ClientsController@profile');
    Route::get('/clients/post', 'ClientsController@postForm');
    Route::get('/clients/players', 'ClientsController@players');
    Route::get('/clients/my', 'ClientsController@my');
    Route::get('/clients/messages', 'ClientsController@messages');
    Route::get('/clients/sitemap', 'ClientsController@sitemap');
    Route::get('/clients/post/comfirm', 'ClientsController@postComfirm');
    Route::get('/clients/players/{id}', 'ClientsController@playersIndex');
    Route::get('/clients/my/{id}', 'ClientsController@myIndex');
    Route::get('/clients/messages/{id}', 'ClientsController@messagesIndex');
    Route::get('/clients/messages/group/{id}', 'ClientsController@messagesGroupIndex');
    Route::get('/clients/player/assessment', 'ClientsController@playerAssessment');

    //クライアントの表示だけここまで
    //ここから飯田ファイル
    Route::get('/clientsPost', 'ClientsController@jobPost');
    //ホーム画面。
    Route::get('/clients/home', 'ClientsController@Clienthome');
    Route::post('/clientsProfile', 'ClientsController@profileUpdate');
    Route::post('/clientsRegister', 'ClientsController@registerUpdate');

    //以下テスト用
    Route::get('/iida/test1', 'IidaController@test1');
    Route::post('/iida/test2', 'IidaController@test2');

    Route::get('/mishima/test1', 'MishimaController@test1');
    Route::post('/mishima/test2', 'MishimaController@test2');

    Route::get('/aoki/test1', 'AokiController@test1');
    Route::post('/aoki/test2', 'AokiController@test2');
