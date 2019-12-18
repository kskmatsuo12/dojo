<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

use App\User;

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

    // 三島さん作ユーザープロフィール

    public function profile(Request $request)
    {
        //バリデーション
        // $validator = Validator::make($request->all(), [
        //     'user_name_sei' => 'required|max:20',
        //     'user_name_mei' => 'required|max:20',
        //     'user_hurigana_sei' => 'required|max:20',
        //     'user_hurigana_mei' => 'required|max:20',
        //     'email' => 'required|min:4',
        //     'password' => 'required|min:6|max:20',
        // ]);
        //上あとでつかう
        // バリデーション:エラー
        // if ($validator->fails()) {
        //     return redirect('welcome')
        //         ->withInput()
        //         ->withErrors($validator);
        // }
        //以下に登録処理を記述（Eloquentモデル）
        $users = new User();
        $users->user_name_sei = $request->user_name_sei;
        $users->user_name_mei = $request->user_name_mei;
        $users->user_hurigana_sei = $request->user_hurigana_sei;
        $users->user_hurigana_mei = $request->user_hurigana_mei;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        $last_insert_id = $users->id;
        return view('users/profile', [
            "lid"=>$last_insert_id
        ]);
        // return view(‘users/profile/.$user->id)’);
    }
    // ユーザープロフィール2
    public function profile2(Request $request)
    {
        //バリデーション
        // $validator = Validator::make($request->all(), [
        //     ‘id’ => ‘required’,
        // ]);
        //バリデーション:エラー
        // if ($validator->fails()) {
        //     return redirect(‘welcome’)
        //         ->withInput()
        //         ->withErrors($validator);
        // }
        $users = User::find($request->lid);
        $users->user_prefectures = $request->user_prefectures;
        $users->user_exp_business = $request->user_exp_business;
        $users->user_exp_job = $request->user_exp_job;
        $users->user_phone = $request->user_phone;
        $users->user_exp_company = $request->user_exp_company;
        $users->user_exp_department = $request->user_exp_department;
        $users->user_exp_position = $request->user_exp_position;
        $users->user_exp_start = $request->user_exp_start;
        $users->user_exp_end = $request->user_exp_end;
        $users->user_current = $request->user_current;
        $users->save();
        return view('welcome');
        // return view(‘users/profile2’);
    }
    
    // ユーザープロフィール1
    // public function profile()
    // {
    //     return view('users/profile');
    // }

    // ユーザープロフィール２
    // public function profile2()
    // {
    //     return view('users/profile2');
    // }

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
