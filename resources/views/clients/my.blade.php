<?php
use App\User;
use App\Job;

$id=session()->get('id');
$jobs1 = Job::where('client_id', $id)->where('job_status', 1)->get();//募集中
$jobs2 = Job::where('client_id', $id)->where('job_status', 2)->get();//進捗中
$jobs3 = Job::where('client_id', $id)->where('job_status', 3)->get();//終了（評価待ち）

?>

<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<!-- CSSファイルの指定をしてください〜 -->
<style>
    body{
        font-family: 'M PLUS 1p', sans-serif;
        background:#f2feff;
    }


    .nav-logo img{
        width: 85px;
        padding:0;
        margin:0;
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0,0,0,0.8);
    }

    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(67,196,207);
    }


    .pjt_post{
        background-color: transparent;
            border: none;
            cursor: pointer;
            outline: none;
            padding: 0;
            appearance: none;
            color: rgba(0,0,0,0.8);
    }

    .pjt_post:hover{
        color: rgba(67,196,207);
    }

    .dropdown-item{
        font-size:13px;
        height: 40px;
        line-height: 30px;
    }
    .jumbotron {
        background-color: white;
        box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
    }
    .jumbotron h1{
        font-size: 30px;
        padding: 20px;
        font-weight: bold;
    }

    .lead{
        font-size: 20px;
        padding: 10px 20px 30px;
    }
    .col-lg-4{
        background-color:white;
        border-radius: 2px;
        box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
        margin: 0 15px 15px;
    }
    .col-lg-4 h2{
        font-size: 18px;
        font-weight: bold;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .col-lg-4 i{
        color: rgb(67,196,207);
    }
    .container {
        width: 100%;
    }
    .btn-success {
        color: #fff;
        background-color: rgba(67,196,207);
        border-color: rgba(67,196,207);
        box-shadow: 1px 1px 6px rgba(0,0,0,0.2);
    }
    .btn{
        background: rgb(67,196,207);
        padding:15px;
        color:#ffffff;
        border-color:rgb(67,196,207);
        margin:20px 0px;
    }

    .btn:hover{
        background: #75d7e0;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        color:#ffffff;
        border-color: rgba(67,196,207);
    }

    .carousel-item h1{
        font-weight: bold;
        font-size:20px;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.9);
    }

    .carousel-item p{
        text-shadow: 2px 1px 2px rgba(0,0,0,0.4);
    }

    body{
        background:#f2feff;
        padding-top: 0rem;
        color: #5a5a5a;
        font-family: 'M PLUS 1p', sans-serif;
    }

    .contains{
        display: flex;
        justify-content: center;
        margin:20px auto;
        width:100%;
    }
    .contain{
        display:inline-block;
    }
    .pjts{
        float: left;
        position: relative;
        width:150px;
        text-align: center;
        height:220px;
        margin:20px 10px 30px 10px;
        overflow: hidden;
        box-shadow: 2px 2px 4px rgb(82, 147, 151);
    }

    .pjts:hover{
        opacity:0.6;
    }

    .pjt img{
        width:150px;
    }

    .info{
        position: absolute;
        top: 68%;
        left: 50%;
        width:150px;
        height:150px;
        padding: 10px;
        background: white;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }

    .pjt_term{
        font-size: 13px;
        color: rgb(67,196,207);
        margin:5px 0 10px;

    }
    .pjt_title{
        font-size: 13px;
        margin:5px 0 5px;
    }
    .pjt_name{
        font-size: 10px;
        margin:5px 0 5px;
    }

    .line{
        padding-top:20px;
    }
    .line h1{
        padding-top:20px;
        text-align: center;
        height: 60px;
        line-height: 50px;
        font-size: 18px;
        font-weight: bold;
        letter-spacing:1px;
    }

    .line h2{
        text-align: center;
        background: rgb(67,196,207);
        height: 5px;
        width:50px;
        margin:  20px auto;
        border-radius: 50px;
    }

    .btn{
        background: rgb(67,196,207);
        box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        padding:10px;
        color:#ffffff;
    }


    .carousel-item h1{
        font-weight: bold;
    }
    .carousel-control-next:hover{
        background: rgba(67,196,207, 0.2);
    }
    .carousel-control-prev:hover{
        background: rgba(67,196,207, 0.2);
    }
    .link{
        color: #575757;
    }

    .skill{
        position: absolute;
        background: rgba(67,196,207);
        color: white;
        top: -38%;
        left: 29%;
        font-size: 10px;
        border-radius: 10px;
        padding: 6px;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }


    @media screen and (min-width: 781px) {
        .contains{
            display: flex;
            justify-content: center;
            margin:20px auto;
            width:100%
        }
        .pjts{
            float: left;
            position: relative;
            width:255px;
            text-align: center;

            height:220px;
            margin:20px 10px 30px 10px;
            overflow: hidden;
            box-shadow: 2px 2px 4px rgb(82, 147, 151);
        }

        .pjt img{
            width:255px;
        }

        .info{
            position: absolute;
            top: 73%;
            left: 50%;
            width:256px;
            height: 120px;
            padding: 10px;
            background: white;
            -ms-transform: translate(-50%,-50%);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
        .skill {
            position: absolute;
            background: rgba(67,196,207);
            color: white;
            top: -67%;
            left: 21%;
            font-size: 11px;
            border-radius: 10px;
            padding: 7px;
            -ms-transform: translate(-50%,-50%);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
        .col-lg-4{
        background-color:white;
        border-radius: 2px;
        box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
        flex: 0 0 31%;
        max-width: 31%;
        margin: 0 auto;
    }
    }
    @media screen and (min-width: 1040px) {
    .container {
        width: 1040px;
        margin: auto;
        width:90%;
    }

    }
    .rounded {
        border-radius: .0rem!important; 
    }
</style>
@extends('layouts.app')
@include('layouts/header_client')

@section('content')
<div class="container">

<div class="line">
    <h1 style="font-size:20pt">案件管理画面</h1>
    <h2>　　</h2>
</div>

<div class="jobbox">

        <div class="line">
            <h1>募集中</h1>
        </div>

        <div class="contains">
            @if (count($jobs1) > 0)
            <div class="contain">
                @for ($i=0;$i<@count($jobs1);$i++)

                <div class="pjts">
                    <a href="{{ url('clients/my/index/'.$jobs1[$i]->id)}}" class="link">
                    <div class="pjt">
                            <img src="https://skillshift-production.s3.ap-northeast-1.amazonaws.com/file1575512880-802.png" alt="">
                            <div class="info">
                                <p class="pjt_term">{{$jobs1[$i]->work_term}}</p>
                                <p class="pjt_title">{{$jobs1[$i]->job_title}}</p>
                                <p class="pjt_name">{{$jobs1[$i]->responsible_party}}</p>
                            </div>
                        </div>
                        </a>
                    </div>

                    @endfor
                </div>
            @endif
        </div>
    </div>


    <div class="jobbox">

        <div class="line">
            <h1 id="progress">プロジェクト中</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
            @if (count($jobs2) > 0)
                <div class="contain">
                    @for ($i=0;$i<@count($jobs2);$i++)
                    <div class="pjts"> 
                        <a href="{{ url('clients/my/index/'.$jobs2[$i]->id) }}">
                        <div class="pjt">
                            <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                            <div class="info">
                                <p class="pjt_term">{{$jobs2[$i]->work_term}}</p>
                                <p class="pjt_title">{{$jobs2[$i]->job_title}}</p>
                                <p class="pjt_name"> {{$jobs2[$i]->responsible_party}}</p>
                            </div>
                        </div>
                        </a>
                    </div>

                    @endfor
                </div>
            @endif
        </div>
    </div>


    <div class="jobbox">
        <div class="line">
            <h1 id="assess_term">評価待ち</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
        @if (count($jobs3) > 0)
                <div class="contain">
                    @for ($i=0;$i<@count($jobs3);$i++)
                    <div class="pjts">
                    <a href="{{ url('clients/my/index/'.$jobs3[$i]->id) }}">
                        <div class="pjt">
                            <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                            <div class="info">
                                <p class="pjt_term">{{$jobs3[$i]->work_term}}</p>
                                <p class="pjt_title">{{$jobs3[$i]->job_title}}</p>
                                <p class="pjt_name"> {{$jobs3[$i]->responsible_party}}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endfor
                </div>
            @endif
        </div>
    </div>

@include('layouts/sp_menu_client')


<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<!-- JSファイルの指定してください！ -->

@endsection
