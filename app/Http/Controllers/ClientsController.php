<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//飯田ファイルはここから
use Validator;
use App\User;
use App\Job;
use App\Client;
use App\Suggestion;

//飯田ファイルはここまで


class ClientsController extends Controller
{
    // public function index()
    // {
    //     return view('users/home');
    // }


    //registerの登録（下の一行をweb.phpへ）
    //Route::post('/clientsRegister', 'ClientsController@registerUpdate');
    public function registerUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_name' => 'required',
            'client_kana' => 'required',
            'client_loginid' => 'required',
            'client_pass' => 'required',
        ]);
    
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $clients = new Client;
        $clients->client_name = $request->client_name;
        $clients->client_kana = $request->client_kana;
        $clients->client_loginid = $request->client_loginid;
        $clients->client_pass = $request->client_pass;

        if ($request->client_pass == $request->client_pass_confirm) {
            $clients->client_pass = $request->client_pass;
        } else {
            return redirect('/clients/register_form');
        }
   
        $clients->save();
        //client_idをセッションに保存
        // $request->session()->put('client_id', $request->client_id);
        $request->session()->put('id', $clients->id);

        return redirect('/clients/profile');
    }

    //profile登録
    //Route::post('/clientsProfile', 'ClientsController@profileUpdate');
    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_loc' => 'required',
            'client_url' => 'required',
            'client_biz' => 'required',
            'client_num_emp' => 'required',
            // 'client_matter' => 'required',
        ]);
    
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        //セッションから取得
        $value = $request->session()->get('id');

        // 以下に登録処理を記述（Eloquentモデル）
        $clients = Client::where('id', $value)->first();
        $clients->client_loc = $request->client_loc;
        $clients->client_url = $request->client_url;
        $clients->client_biz = $request->client_biz;
        $clients->client_num_emp = $request->client_num_emp;
        $clients->client_matter = $request->client_matter;
        $clients->save();
        return redirect('/clients/home');

        $request->session()->put('id', $request->id);
    }
    //クライアントのログイン機能
    public function ClientLogin(Request $request)
    {
        // $this->validate($request,[
        // 'client_id' => 'required',
        // 'client_pass' => 'required|min:4'
        // ]);
       
        $clients = Client::where('client_loginid', $request->client_loginid)->first();


        if ($clients->client_pass === $request->client_pass) {
            $request->session()->put('id', $clients->id);
            return redirect('/clients/home');
        } else {
            return redirect()->back();
        }
       

        // if(Client::attempt(['client_id' => $request->client_id, 'client_pass' => $request->client_pass])){
        // return redirect('/clients/home');
        // }
        // return redirect()->back();
    }

    //clients/homeを表示
    public function Clienthome(Request $request)
    {
        $value = $request->session()->get('id');
        $clients = Client::where('id', $value)->first();


        $jobs = Job::where('client_id', $value)->paginate(5);
        return view('clients/home', [
            'jobs' => $jobs,
            'clients' => $clients,

        ]);

        // $jobs = Job::orderBy('created_at', 'asc')->paginate(2);
        // return view('clients/home', [
        //     'jobs' => $jobs,
        // ]);

        //セッションでclient_idを投げる
        $request->session()->put('id', $request->id);
    }
    
    //jobs投稿画面を表示
    public function postForm()
    {
        return view('clients/post');
    }

    //jobsを保存
    public function jobPost(Request $request)
    {
        //セッションから取得
        $value = $request->session()->get('id');

        $validator = Validator::make($request->all(), [
            'job_title' => 'required',
            'job_text' => 'required',
            // 'recruit_advisor' => 'required',
            // 'consultation' => 'required',
            'request_fill_out' => 'required',
            'work_format' => 'required',
            'work_term' => 'required',
            // 'interview_format' => 'required',
            'interview_place' => 'required',
            'request_number' => 'required',
            'recruitment_term' => 'required',
            'responsible_party' => 'required',
            'responsible_email' => 'required',
            // 'get_skill' => 'required',
            // 'client_id' => 'required',
        ]);
    
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $jobs = new Job;
        $jobs->job_title = $request->job_title;
        $jobs->job_text = $request->job_text;
        $jobs->recruit_advisor = $request->recruit_advisor;
        $jobs->consultation = $request->consultation;
        $jobs->request_fill_out = $request->request_fill_out;
        $jobs->work_format = $request->work_format;
        $jobs->work_term = $request->work_term;
        $jobs->interview_format = $request->interview_format;
        $jobs->interview_place = $request->interview_place;
        $jobs->request_number = $request->request_number;
        $jobs->recruitment_term = $request->recruitment_term;
        $jobs->responsible_party = $request->responsible_party;
        $jobs->responsible_email = $request->responsible_email;
        $jobs->get_skill = $request->get_skill;

        //job_statusに1（募集中）を代入
        $jobs->job_status = 1;
        

        //セッションで受け取ったclient_idをJobテーブルに保存
        $jobs->client_id = $value;
        $jobs->save();
        return redirect('/clients/home');
    }


    //飯田ファイルはここまで

    public function loginForm()
    {
        return view('clients/login');
    }

    public function registerForm()
    {
        return view('clients/register');
    }

    public function home()
    {
        return view('clients/home');
    }

    public function profile()
    {
        return view('clients/profile');
    }

    public function players()
    {
        return view('clients/players');
    }

    public function my()
    {
        return view('clients/my');
    }

    //案件詳細画面の表示、データ渡し
    public function myIndex(Job $jobs)
    {
        $value = $jobs->client_id;
        $clients = Client::where('id', $value)->first();
        $suggestions = Suggestion::where('job_id', $jobs->id)->get();
        $users=[];
        // foreach ($suggestions as $suggestion) {
        //     // $users = User::where('id', $suggestion->user_id)->first();
        //     $users = User::find($suggestion->user_id);

        // }
        
        for($i=0;$i<count($suggestions);$i++){
            $users[] = User::where('id', $suggestions[$i]->user_id)->first(); ;
        }

        return view(
            'clients/my/index',
            ['job'=>$jobs,
          'client'=>$clients,
          'suggestion'=>$suggestions,
          'user'=>$users,
            ]
        );
    }

    //募集の終了→案件スタート（job_statusを2に変更）
    public function requestDone(Request $request)
    {
        $jobs = Job::find($request->id);
        $jobs->job_status = 2;
        $jobs->save();

        $suggestions = Suggestion::where('job_id', $jobs->id)->get();
        // $suggestions->progress_info = 5;
        // $suggestions->save();
        foreach ($suggestions as $suggestion) {

            $suggestion->progress_info = 5;
            $suggestion->save();
        
        }
        return redirect('/clients/home');
    }

    //案件の終了→評価スタート（job_statusを3に変更）
    public function projectDone(Request $request)
    {
        $jobs = Job::find($request->id);
        $jobs->job_status = 3;
        $jobs->save();
        return redirect('/clients/home');
    }

    public function messages()
    {
        return view('clients/messages');
    }

    public function sitemap()
    {
        return view('clients/sitemap');
    }

    public function postComfirm()
    {
        return view('clients/post/comfirm');
    }

    public function playersIndex()
    {
        return view('clients/players/index');
    }

    public function messagesIndex()
    {
        return view('clients/messages/index');
    }

    public function messagesGroupIndex()
    {
        return view('clients/messages/group');
    }

    public function playerAssessment()
    {
        return view('clients/players/assessment');
    }

    public function suggestionsIndex(Suggestion $suggestions)
    {
        $job_id = $suggestions->job_id;
        $uid = $suggestions->user_id;
        $job = Job::find($job_id);
        $user = User::find($uid);
        return view('clients/suggestions/index', ['suggestion'=>$suggestions,'job'=>$job, 'user'=>$user]);
    }

    public function accept()
    {
    }
}
