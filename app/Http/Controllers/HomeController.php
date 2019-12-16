<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
// Userコントローラーとして使う。
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //ログイン認証していれば通す（一時的にオフにしてる）
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    //ログイン認証していれば通すここまで


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //userホーム画面
    public function index()
    {
        return view('users/home');
    }
    
    // ユーザープロフィール1
    public function profile()
    {
        return view('users/profile');
    }

    // ユーザープロフィール２
    public function profile2()
    {
        return view('users/profile2');
    }

    // ユーザープロフィール3
    public function profile3()
    {
        return view('users/profile3');
    }

    // 案件一覧
    public function issues()
    {
        return view('users/issues');
    }

    //サイトマップ
    public function sitemap()
    {
        return view('users/sitemap');
    }

    //案件詳細
    public function issuesIndex()
    {
        return view('users/issues/index');
    }

    //案件応募
    public function proposal()
    {
        return view('users/issues/proposal');
    }

    //案件応募確認
    public function comfirm()
    {
        return view('users/issues/comfirm');
    }

    // 案件管理
    public function my()
    {
        return view('users/my');
    }

    //案件管理詳細
    public function myIndex()
    {
        return view('users/my/index');
    }

    //メッセージ管理
    public function messages()
    {
        return view('users/messages');
    }

    //メッセージ画面（個人）
    public function messagesIndex()
    {
        return view('users/messages/index');
    }

    //メッセージ画面（グループ）
    public function messagesGroup()
    {
        return view('users/messages/group');
    }

    //企業評価
    public function assessment()
    {
        return view('users/issues/assessment');
    }
}
