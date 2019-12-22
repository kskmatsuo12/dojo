@extends('layouts.app')

<?php
use App\Suggestion;
use App\User;
// use App\Job;
//おすすめのユーザー5人
$suggestions = Suggestion::take(5)->get();
$users = User::orderBy('user_point', 'asc')->paginate(5);
$id=session()->get('id');
// $jobs = Job::take(5)->get();
?>
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
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
        height: 60px;
        line-height: 50px;
        font-size: 18px;
        font-weight: bold;
        color:rgb(67,196,207);
        letter-spacing:1px;
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
            <h1>すべてのアドバイザー</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
            @if (count($users) > 0)
                <div class="contain">
                    {{$i =0}}
                    @foreach ($users as $user)
                    <div class="pjts">
                    <a href="players/{{$users[$i]->id}}">
                        <div class="pjt">
                            <img src="" alt="顔写真">
                            <div class="info">
                                <p class="pjt_term">経験業界{{$users[$i]->user_exp_business}}</p>
                                <p class="pjt_title">経験職種{{$users[$i]->user_exp_job}}</p>
                                <p class="pjt_name">都道府県{{$users[$i]->user_prefectures}}</p>
                                <p class="pjt_name">累計ポイント{{$users[$i]->user_point}}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <?php $i +=1 ?>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

@include('layouts/sp_menu')

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->



@endsection


