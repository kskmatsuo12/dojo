<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//飯田ファイルはここから
use Validator;
use App\User;
use App\Job;

//飯田ファイルはここまで


class ClientsController extends Controller
{
    // public function index()
    // {
    //     return view('users/home');
    // }


    //jobsを保存
    public function postForm()
    {
        return view('clients/post');
    }

    public function jobPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_title' => 'required',
            'job_text' => 'required',
            'recruit_advisor' => 'required',
            'consultation' => 'required',
            'request_fill_out' => 'required',
            'work_format' => 'required',
            'work_term' => 'required',
            'interview_format' => 'required',
            'interview_place' => 'required',
            'request_number' => 'required',
            'recruitment_term' => 'required',
            'responsible_party' => 'required',
            'responsible_email' => 'required',
            'get_skill' => 'required',
            'client_id' => 'required',
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
        $jobs->client_id = $request->client_id;
        $jobs->save();
        return redirect('/');
    }

    public function Clienthome()
    {
        $jobs = Job::orderBy('created_at', 'asc')->paginate(2);
        return view('clients/home', [
            'jobs' => $jobs
        ]);
    }

    //飯田ファイルはここまで

    public function loginFrom()
    {
        return view('clients/login');
    }

    public function registerFrom()
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
