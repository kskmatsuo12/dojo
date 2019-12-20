<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


//飯田ファイルはここから
use Validator;
use App\User;
use App\Job;
use App\Client;

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
            'client_id' => 'required',
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
        $clients->client_id = $request->client_id;
        $clients->client_pass = $request->client_pass;

        if ($request->client_pass == $request->client_pass_confirm){
            $clients->client_pass = $request->client_pass;
        }else{
            return redirect('/clients/register_form');
        }
   
        $clients->save();
        //client_idをセッションに保存
        // $request->session()->put('client_id', $request->client_id);
        $request->session()->put('client_id', $request->client_id);

        
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
        $value = $request->session()->get('client_id');

        // 以下に登録処理を記述（Eloquentモデル）
        $clients = Client::where('client_id', $value)->first();
        $clients->client_loc = $request->client_loc;
        $clients->client_url = $request->client_url;
        $clients->client_biz = $request->client_biz;
        $clients->client_num_emp = $request->client_num_emp;
        $clients->client_matter = $request->client_matter;
        $clients->save();
        return redirect('/clients/home');

        $request->session()->put('client_id', $request->client_id);
    }
    //クライアントのログイン機能
    public function ClientLogin(Request $request){
        // $this->validate($request,[
        // 'client_id' => 'required',
        // 'client_pass' => 'required|min:4'
        // ]);
       
        $clients = Client::where('client_id', $request->client_id)->first();


        if($clients->client_pass === $request->client_pass){
            $request->session()->put('client_id', $clients->client_id);
            return redirect('/clients/home');
        }  else{
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
        $value = $request->session()->get('client_id');
        $clients = Client::where('client_id', $value)->first();


        $jobs = Job::where('client_id', $value)->paginate(5);
        return view('clients/home', [
            'jobs' => $jobs,
        ]);

        // $jobs = Job::orderBy('created_at', 'asc')->paginate(2);
        // return view('clients/home', [
        //     'jobs' => $jobs,
        // ]);

        //セッションでclient_idを投げる
        $request->session()->put('client_id', $request->client_id);
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
        $value = $request->session()->get('client_id');

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
    public function myIndex(Job $jobs)
    {
        return view('clients/my/index', ['job'=>$jobs]);
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
        return view('clients/player/assessment');
    }
}
