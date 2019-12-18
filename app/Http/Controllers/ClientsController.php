<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // public function index()
    // {
    //     return view('users/home');
    // }

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

    public function postForm()
    {
        return view('clients/post');
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
