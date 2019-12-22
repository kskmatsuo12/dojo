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

 use Illuminate\Support\Facades\Auth;

 // Route::get('/', function () {
//     return view('home');
// });
// Route::get('/', function () {
//     return view('users/test');
// });
// Route::get('/', function () {
//     return view('users/profile2');
// });

//welcomeページはログインされていたらユーザーログインへリダイレクト
Route::get('/', function () {
    if (Auth::id()) {
        return redirect('/home');
    }
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

    Route::get('/issues/{jobs}', 'HomeController@issuesIndex');
    Route::post('/proposal', 'HomeController@proposal');
    Route::post('/comfirm', 'HomeController@comfirm');
    Route::post('/post_suggestion', 'HomeController@postSuggestion');
    

    Route::get('/my/{id}', 'HomeController@myIndex');

    Route::get('/messages', 'HomeController@messages');
    Route::get('/messages/{id}', 'HomeController@messagesIndex');
    Route::get('/messages/group/{id}', 'HomeController@messagesGroup');

    Route::get('/issues/assessment', 'HomeController@assessment');

    Route::get('/logout', 'HomeController@logout');

    Route::post('/post_image_user', 'ImageController@user_image');
    Route::post('/post_image_client', 'ImageController@client_image');
    //ユーザーの表示だけここまで

// });
// ユーザーがログインしていないと入れないページ


// クライアントはここより下に！
// クライアントのログインは優先度低めで！
    Route::get('/clients/login_form', 'ClientsController@loginForm');
    Route::post('/clients/ClientLogin', 'ClientsController@ClientLogin');
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
    Route::get('/clients/my/index/{jobs}', 'ClientsController@myIndex');
    Route::get('ClientRequestDone', 'ClientsController@requestDone');
    Route::get('ClientProjectDone', 'ClientsController@projectDone');
    Route::get('ClientAssessmentDone', 'ClientsController@assessmentDone');
    
    Route::get('/clients/player/assessment', 'ClientsController@playerAssessment');
    Route::get('PlayerAssessmentDone', 'ClientsController@playerassessDone');

    //クライアントの表示だけここまで
    //ここから飯田ファイル
    Route::get('/clientsPost', 'ClientsController@jobPost');
    //ホーム画面。
    Route::get('/clients/home', 'ClientsController@Clienthome');
    Route::post('/clientsProfile', 'ClientsController@profileUpdate');
    Route::post('/clientsRegister', 'ClientsController@registerUpdate');


    //応募の詳細画面
    Route::get('/clients/suggestions/{suggestions}', 'ClientsController@suggestionsIndex');
    //応募の受理
    Route::post('/clients/accept', 'ClientsController@accept');

    //ユーザーメッセージルーム画面
    Route::get('/message', 'MessageController@message');
    //個別メッセージページ
    Route::get('/clients/messages/message_room', 'MessageController@message_room')->name('room.show');
    //メッセージ送信
    Route::post('/clients/message/post', 'MessageController@message_post_client');

    //以下テスト用
    Route::get('/iida/test1', 'IidaController@test1');
    Route::post('/iida/test2', 'IidaController@test2');

    Route::get('/mishima/test1', 'MishimaController@test1');
    Route::post('/mishima/test2', 'MishimaController@test2');

    Route::get('/aoki/test1', 'AokiController@test1');
    Route::post('/aoki/test2', 'AokiController@test2');
