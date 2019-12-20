<?php
    use App\Job;
    use App\Client;
    use App\Suggestions;
    $jobs = Job::get();
    $clients = Client::get();
    $suggestions = Suggestions::get();
    echo $jobs;
    echo $clients;
    echo $suggestions[0]->suggestion_text;
?>
@extends('layouts.app')
<style>
    body{
    background:#f2feff;
    }

    .contains{
        display:?flex;
        justify-content: center;
        margin:20px auto;
        width:90%
    }

    .pjts{
        float: left;
        position: relative;
        width:145px;
        text-align: center;
        padding:10px;
        margin-bottom:120px;
    }

    .pjt img{
        width:144px;
    }

    .info{
        position: absolute;
        top: 140%;
        left: 50%;
        width:125px;
        height:100px;
        padding: 10px;
        background: white;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }

    .pjt_term{
        font-size: 13px;
        font-weight: bold;
        color: rgb(67,196,207);
        margin:5px 0 10px;

    }
    .pjt_title,.pjt_name{
        font-size: 13px;
        font-weight: bold;
        color: rgb(37, 37, 37);
        margin:5px 0 5px;
    }
    .line h1{
        padding-top:20px;
        text-align: center;
        height: 50px;
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

    button{
        display: flex;
        justify-content: center;
        width: 150px;
        height: 50px;
        border-radius: 50px;
        background: #75d7e0;
        font-size: 16px;
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
    span{
        font-size: 10px;
        color:white;
        background:crimson;
        letter-spacing:0px;
        padding:2px;
        margin-left:3px;
        height: 12px;
        border-radius: 4px;
    }

    tr{
        vertical-align: middle;
        height: 30px;
        margin: 20px auto;
        letter-spacing:1px;
        
    }



    th{
        background:rgb(67,196,207,0.3);
        vertical-align: middle;
        height:30px;
        /* border-bottom: 1px solid rgb(21, 163, 75,0.1); */
        padding: 0 15px;
        width:25%;
    }

    td{
        background:white;
        padding:20px 10px;
        vertical-align: middle;
        display: table-cell;
        /* text-align:left; */
        align-items:center;


    }
    table{
        margin: 0 auto;
        width:100%;
        display:?flex;
        justify-content: center;
        border: 1px solid rgb(67,196,207,0.5);
        border-radius: 10px;
        border-collapse: separate;
        box-shadow: 0px 1px 3px rgb(82, 147, 151);
        overflow: hidden;
        text-align: center;
    }

    @media screen and (min-width: 781px) {
        .contains{
            display:?flex;
            justify-content: center;
            margin:20px auto;
            width:80%
        }
        .pjts{
            float: left;
            position: relative;
            width:210px;
            text-align: center;
            padding:10px;
            margin-bottom:120px;
        }

        .pjt img{
            width:210px;
        }

        .info{
            position: absolute;
            top: 125%;
            left: 50%;
            width:190px;
            height:100px;
            padding: 10px;
            background: white;
            -ms-transform: translate(-50%,-50%);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
    }
    @media screen and (min-width: 1040px) {
    .container {
        width: 1040px;
        margin: auto;
        width:90%;
    }

    }
</style>
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">

<div>公募の作成（公募作成画面に遷移）</div>
    <!-- この中にコンテンツ -->
    現在の案件
    過去の案件一覧
    詳細画面から案件の報告等確認可能
    foreachで持ってくる（jobs）
    クリックしたら案件詳細
    詳細で見られる項目：jobデータ、suggestionデータ
    　現在：過去のここを解像度高く

    <div>
        @if (count($jobs) > 0)
        <!-- クライアント条件での抜出要 -->
        <div class="card-body">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                <th>公募タイトル</th>
                <th>募集期限</th>
                <th>募集の状況</th>
                <th>案件進捗</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                @foreach ($jobs as $job)
                クライアントidごと、過去含む
                <!-- いけるか不安 -->
                    <tr>
                    <td class="">
                        <div>{{$job->job_title}}</div>
                    </td>
                    <td class="">
                        <div> {{$job->recruitment_term}}</div>
                    </td>
                    <td class="">
                        <div> {{$job->job_status}}</div>
                    </td>
                    <td class="">
                        <div> {{$suggestions[0]->progress_info}}</div>
                    </td>
                    <td class="">
                        <div><a href="">詳細</a></div>
                    </td>
                    <td class="">
                        <div><a href=""> 評価</a></div>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    @endif

    </div>



</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
