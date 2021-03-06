@extends('layouts.app')

<?php
// echo $user->id;
?>
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <!-- CSSファイル指定してください -->
</head>

<style>
    .btn{
        background: rgb(67,196,207);
        padding:15px;
        color:#ffffff;
    }
    .btn:hover{
        background: #75d7e0;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        color:#ffffff;
    }
    .carousel-item h1{
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.9);
    }
    .carousel-item p{
        text-shadow: 2px 1px 2px rgba(0,0,0,0.4);
    }

    body{
        background:#f2feff;
        padding-top: 0rem;
        color: #5a5a5a;
    }
    .contains{
        display: flex;
        justify-content: center;
        margin:20px auto;
        width:90%;
    }
    .contain{
        display:inline-block;
    }
    .pjts{
        float: left;
        position: relative;
        width:153px;
        text-align: center;
        padding:10px;
        margin-bottom:150px;
    }
    .pjts:hover{
        opacity:0.6;
    }
    .pjt img{
        width:144px;
    }
    .info{
        position: absolute;
        top: 152%;
        left: 53%;
        width:145px;
        height:150px;
        padding: 10px;
        background: white;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        box-shadow: 1px 4px 4px rgb(82, 147, 151);
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
    .line h1{
        padding-top:20px;
        text-align: center;
        height: 50px;
        line-height: 30px;
        font-size: 16px;
        font-weight: bold;
        color:rgb(67,196,207);
        letter-spacing:1px;
    }
    .line span{
        padding-top:20px;
        text-align: center;
        height: 60px;
        line-height: 50px;
        font-size: 24px;
        font-weight: bold;
        color:rgb(67,196,207);
        letter-spacing:1px;
        margin-right: 8px;
    }

    .line h2{
        text-align: center;
        background: rgb(67,196,207);
        height: 5px;
        width:50px;
        margin: 0 auto 20px;
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

    .user_image_wrapper{
        width: 250px;
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 25px;
    }

    .user_image{
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
    }


    /* .jobbox{
        height: 80%;
    } */

    @media screen and (min-width: 781px) {
        .contains{
            display: flex;
            justify-content: center;
            margin:20px auto;
            width:94%
        }
        .pjts{
            float: left;
            position: relative;
            width:210px;
            text-align: center;
            padding:10px;
            margin: 20px 20px 140px 20px;
        }
        .pjt img{
        .info{
            position: absolute;
            top: 130%;
            left: 55%;
            width:213px;
            height:150px;
            padding: 10px;
            background: white;
            -ms-transform: translate(-50%,-50%);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
    }
    @media screen and (min-width: 1040px) {
    }
</style>
<!-- CSSファイルの指定をしてください〜 -->
@section('content')

<div class="container">
    <div class="jobbox">

        <div class="line">
            <h1><span>{{$user->name}} {{$user->user_name_mei}}</span>さんの詳細情報</h1>
            <h1>（{{$user->user_hurigana_sei}} {{$user->user_hurigana_mei}}）</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
          
        </div>
    </div>

    <div class="jobbox">
        <div class="line">
            <h1>プロフィール写真</h1>
            <div class="user_image_wrapper">
                <img class="user_image" src="{{$user->image_url}}">
            </div>
            <h2></h2>
        </div>

    <div class="jobbox">
        <div class="line">
            <h1>所在地：{{$user->user_prefectures}}</h1>
            <h1>業界：{{$user->user_exp_business}}</h1>
            <h1>職種：{{$user->user_exp_job}}</h1>
            <h1>会社名：{{$user->user_exp_company}}</h1>
            <h1>役職：{{$user->user_exp_position}}</h1>

            <h2></h2>
        </div>
        <div class="jobbox">
        <div class="line">
            <h1>（任意項目）</h1>
            <h1>最終学位：{{$user->user_last_degree}}</h1>
            <h1>最終学歴：{{$user->user_last_school}}</h1>
            <h1>得意な言語：{{$user->user_language}}</h1>
            <h1>免許・資格：{{$user->user_licence}}</h1>
        </div>


    </div>

</div>

@include('layouts/sp_menu')


@endsection
