<?php
// echo $messages;
//clientのroomsのこと
// echo $uid;
use App\Client;
use App\Job;
// echo $rooms;
//memo 下のデータが飛んでくる
//[{"id":1,"user_id":1,"client_id":1,"job_id":1,"created_at":"2019-12-22 20:39:30","updated_at":"2019-12-22 20:39:30","deleted_at":null}]
//クリックしたらメッセージに飛ばす
//着信データ、どうとる？
// $users = User::take(5)->get();
for($i=0;$i<count($messages);$i++){
    $clients[$i]= Client::where('id',$messages[$i]->client_id)->first();
    $jobs[$i]= Job::where('id',$messages[$i]->job_id)->first();
    // echo ($jobs[$i]);
    }
// var_dump($users[0]->name);
// var_dump($jobs[0]->job_title);
?>


@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<style>

    body{
        background:#f2feff;
    }

    .box{
        display: flex;
        padding: 0.5em 1em;
        margin: 2em 0;
        color: #5d627b;
        background: white;
        border-top: solid 5px #5d627b;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.22);
    }

    .box p {
        margin: 0; 
        padding: 0;
    }

    .box_image {
        height: 50px;
        width: 50px;
        border-radius: 50px;
        margin-right:32px;
        border: 1px solid #ddd;
    }

    .box_image img {
        height: 50px;
        width: 50px;
        border-radius: 50px;
    }

    .box_text p {
        line-height: 20px;
        letter-spacing: 1px;
    }

    .box_time {
        font-size: 12px;
        text-align: right;
    }

    .message_area {
        padding-bottom: 280px;
        position: relative;
        z-index: 1;
    }

    .message_input {
        height: 120px;
        width: 100%;
        text-align: center;
        bottom:130px;
        background-color: #f2feff;
        position: fixed;
        z-index: 2;
    }

    textarea{
        font-size: 12px;
        letter-spacing: 1px;
        height:120px;
        width: 96%;
        padding:5px;
        border-radius: 5px;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
    }

    button{
        display: flex;
        justify-content: center;
        width: 100px;
        height: 34px;
        border-radius: 50px;
        background: #75d7e0;
        font-size: 12px;
        font-weight: bold;
        letter-spacing:3px;
        color:#ffffff;
        margin: 30px auto 20px;
        user-select: none;
        outline: none;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
        cursor: pointer;
    }
    button:hover{
        box-shadow: none;
        background: #43c4cf;
    }



</style>
<!-- CSSファイルの指定をしてください〜 -->

<!-- この中にコンテンツ -->
@section('content')

</div>
    <!-- ループさせる -->
    <h1>プロジェクト一覧</h1>
    @if(count($messages)>0)
    @for($i=0; $i < count($messages); $i++)
    <div class="box">
        <div class="box_image">
            <img src={{$clients[$i]->image_url}}>
        </div>

        <div class="box_text">    
        <p>プロジェクトタイトル：{{$jobs[$i]->job_title}}</p>
        <p>プロジェクト実施企業 {{$clients[$i]->client_name}}　様</p>
        <p><br></p>
        <p><a href="messages/{{$messages[$i]->id}}">メッセージルームはこちら</a></p>
        </div>

    </div>
    @endfor
    @endif
</div>
@include('layouts/sp_menu')
<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection