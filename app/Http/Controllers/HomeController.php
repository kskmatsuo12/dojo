<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

 //飯田ファイルはここから
  use App\User;
  use App\Job;
  use App\Suggestion;
  use App\Client;

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
      public function logout()
      {
          Auth::logout();
          return redirect('/');
      }

      public function index(Request $request)
      {
          $uid = Auth::id();
          //案件を５件だけ表示
          $jobs = Job::orderBy('created_at', 'desc')->take(5)->get();
          $suggestions = Suggestion::where('progress_info','<', 4)->where('user_id', $uid)->get();
          $user = Auth::user();
          return view('users/home', [
            'user' => $user, 'jobs' => $jobs, 'suggestions' => $suggestions

        ]);
      }

      public function profile_view(Request $request)
      {
          $uid = Auth::id();
          return view('users/profile', ['uid'=>$uid]);
      }

      public function profile2_view(Request $request)
      {
          return view('users/profile2');
      }

      public function profile3_view(Request $request)
      {
          return view('users/profile3');
      }

      // 三島さん作ユーザープロフィール
      //初回登録のためのprofile登録ポスト
      //本来はmakeauthで生成される方へ書くべきなので引っ越し予定
      //   public function profile(Request $request)
      //   {
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
      //   $users = new User();
      //   $users->user_name_sei = $request->user_name_sei;
      //   $users->user_name_mei = $request->user_name_mei;
      //   $users->user_hurigana_sei = $request->user_hurigana_sei;
      //   $users->user_hurigana_mei = $request->user_hurigana_mei;
      //   $users->email = $request->email;
      //   $users->password = $request->password;
      //   $users->save();
      //   $last_insert_id = $users->id;
      //   return view('users/profile', [
      //     "lid"=>$last_insert_id
      // ]);
      // return view(‘users/profile/.$user->id)’);
      //   }


      // ユーザープロフィール2
      //プロフィール２でポストするときに発動
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
          $uid = Auth::id();

          $users = User::find($uid);
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
          return view('users/profile2', ['uid'=>$uid]);
          // return view(‘users/profile2’);
      }

      //三島さんここまで！

      //飯田さんここから
      //profile3を保存
      public function profile2Store(Request $request)
      {
          $validator = Validator::make($request->all(), [
    
        //   'user_last_company' => 'required',
        //   'user_last_company_dept' => 'required',
        //   'user_last_company_position' => 'required',
        //   'user_last_company_since' => 'required',
        //   'user_last_company_since' => 'required',
        //   'user_last_company_until' => 'required',
        //   'user_birthday' => 'required',
        //   'user_last_degree' => 'required',
        //   'user_last_school'=> 'required',
        //   'user_last_school_dept' => 'required',
        //   'user_gender' => 'required',
        //   'user_language' => 'required',
        //   'user_licence' => 'required',
        //   'user_last_company_exp' => 'required'

        ]);
          $uid = Auth::id();
          $users = User::find($uid);
          $users->user_last_company = $request->user_last_company;
          $users->user_last_company_dept = $request->user_last_company_dept;
          $users->user_last_company_position = $request->user_last_company_position;
          $users->user_last_company_since = $request->user_last_company_since;
          $users->user_last_company_since = $request->user_last_company_since;
          $users->user_last_company_until = $request->user_last_company_until;
          $users->user_birthday = $request->user_birthday;
          $users->user_last_degree = $request->user_last_degree;
          $users->user_last_school = $request->user_last_school;
          $users->user_last_school_dept = $request->user_last_school_dept;
          $users->user_gender = $request->user_gender;
          $users->user_language = $request->user_language;
          $users->user_licence = $request->user_licence;
          $users->user_last_company_exp = $request->user_last_company_exp;
          
          $users->image_url = $request->file('image_url')->store('public/user_profile_image');
          $users->image_url = str_replace('public/', '/storage/', $users->image_url);
          
          $users->save();
          return redirect('/home');
      }


      // ユーザープロフィール3
      //   public function profile3()
      //   {
      //       return view('users/profile3');
      //   }

      // 案件一覧
      public function issues()
      {
          $uid = Auth::id();
          $jobs = Job::orderBy('created_at', 'desc')->get();
          $suggestions = Suggestion::where('user_id', $uid)->get();
          return view('users/issues', ['jobs' => $jobs,'suggestions'=>$suggestions]);
      }

      //サイトマップ
      public function sitemap()
      {
          return view('users/sitemap');
      }

      //案件詳細
      public function issuesIndex(Job $jobs)
      {
          $uid = Auth::id();
          $job_id = $jobs->id;
          $client_id = $jobs->client_id;
          $client = Client::where('id', $client_id)->get();
          $did = false;
          $true_false = Suggestion::where('job_id', $job_id)->where('user_id', $uid)->get()->count();

          //飯田追加（12/22）該当のsuggestionのレコードを取得（issues/indexでprogress_infoに応じて表示する項目を変更させる）
          $suggestions = Suggestion::where('job_id', $job_id)->where('user_id', $uid)->first();
          //
          
          if ($true_false == 1) {
              $did = true;
          }

          return view('users/issues/index', ['job'=>$jobs,'did'=>$did,'client'=>$client, 'suggestion'=>$suggestions]);
      }

      //案件応募
      public function proposal(Request $request)
      {
          $uid = Auth::id();
          $did = false;
          $job_id = $request->job_id;
          $job = Job::find($job_id);
          $client_id = $job->client_id;
          $true_false = Suggestion::where('user_id', $uid)->where('job_id', $job_id)->get()->count();
          if ($true_false == 1) {
              $did = true;
          }
          return view('users/issues/proposal', ['job_id'=>$job_id,'user_id'=>$uid,'client_id'=>$client_id, 'did'=>$did]);
      }

      //案件応募確認
      public function comfirm(Request $request)
      {
          $client_id = $request->client_id;
          $job_id = $request->job_id;
          $suggestion_text = $request->suggestion_text;
        
          $job = Job::find($job_id);

          return view('users/issues/comfirm', ['client_id' => $client_id, 'job_id'=>$job_id, 'suggestion_text'=>$suggestion_text, 'job'=>$job]);
      }

      //案件応募送信
      public function postSuggestion(Request $request)
      {
          $client_id = $request->client_id;
          $job_id = $request->job_id;
          $suggestion_text = $request->suggestion_text;
          $user_id = Auth::id();

          $suggestions = new Suggestion;
          $suggestions->job_id = $job_id;
          $suggestions->client_id = $client_id;
          $suggestions->user_id = $user_id;
          $suggestions->suggestion_text = $suggestion_text;
          $suggestions->progress_info = 1;
          $suggestions->save();
        
          return redirect('home');
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
      public function assessment(Request $request)
      {
          return view('users/issues/assessment');
      }
  }
