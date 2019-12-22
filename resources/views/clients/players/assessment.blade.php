@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<?php
    use App\User;
    use App\Job;
    use App\Suggestion;
    $client_id=session()->get('id');
    $job_id = $job;
    // job_idは前のページから持ってくる。忘れないように
    $job_title = Job::where('id',$job_id)->first()->job_title;
    // var_dump($job_title);

    //抽出条件：Suggestionのclient_id&&job_id&&progress_info=3のユーザー>
    $target_user=Suggestion::where('client_id',$client_id)->where('job_id',$job_id)->where('progress_info',3)->get();

    for($i=0;$i<count($target_user);$i++){
        // $target_user_ids[] = $target_user[$i] ->user_id ;
        $users[] = User::where('id', $target_user[$i] ->user_id)->first(); ;
    }
    // var_dump ($target_user);
    // var_dump (count($target_user));
    // var_dump ($users[0]["name"]);
?>  

<style>
    body{
        background:#f2feff;
        font-size:13px;
    }
    input{
        display: flex;
        justify-content: center;
        height: 35px;
        font-size: 12px;
        outline: none;
        resize: none;
        padding:5px;
        margin: 0px auto;
        border-radius: 5px;
        border: 1px solid rgb(168, 168, 168);
        width: 100%;
    }

    input[type=radio] {
        display: none;
    }

    textarea{
        height:130px;
        padding:5px;
        border-radius: 5px;
        margin: 0px auto;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
        width: 100%;
    }

    label{
        display: inline-block;
        width: 40%;
        /* float: left; */
        line-height: 30px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 12px;
        margin:5px;
        color: gray;
        text-align: center;
        align-items:center;
        cursor: pointer;
        border: 1px solid rgba(128, 128, 128, 0.473);
        border-radius: 5px;
        background: #ffffff;
    }
    label:hover {
        background: #75d7e0;
    }
    input[type="radio"]:checked + label {
        background: #43c4cf;
        color: #ffffff; 
        border: 1px solid rgb(240, 240, 240);
    }
    /* .label{
        display: inline-block;
    } */
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

    .wraps{
        width: 70%;
        padding: 25px;
        margin: 0 auto;
        border-radius: 10px;
        background:white;
        box-shadow: 0px 1px 3px rgb(82, 147, 151);
    }
    .wrap{
        margin-bottom:15px;
    }

    .wrap p{
        padding-left: 5px;
        padding-bottom: 12px;
    }

    button{
        display: flex;
        justify-content: center;
        width: 200px;
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

    .req{
        font-size: 10px;
        color:white;
        background:crimson;
        letter-spacing:0px;
        padding:2px;
        margin-left:4px;
        height: 12px;
        border-radius: 4px;
    }
    .opt{
        font-size: 10px;
        color:white;
        background:gray;
        letter-spacing:0px;
        padding:2px;
        margin-left:3px;
        height: 12px;
        border-radius: 4px;
    }

    .adjust{
        height: 10px;
    }

    @media screen and (min-width: 781px) {
        .wraps{
            width: 40%;
        }
        .wrap{
            margin-bottom:30px;
        }
        body,label{
            font-size:15px;
        }
        input{
            display: flex;
            justify-content: center;
            height: 40px;
            font-size: 15px;
            outline: none;
            resize: none;
            padding:5px;
            margin: 0px auto;
            border-radius: 5px;
            border: 1px solid rgb(168, 168, 168);
            width: 100%;
        }

        textarea{
            font-size: 15px;
            height:130px;
            padding:5px;
            border-radius: 5px;
            margin: 0px auto;
            border: 1px solid rgb(168, 168, 168);
            outline: none;
            resize: none;
            width: 100%;
        }
    }

    @media screen and (min-width: 1040px) {
    .container {
        width: 1040px;
        margin: auto;
    }
    }

</style>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<!-- <p>メモ　当該ジョブ参加のユーザーを抽出して表記</p>
<p>条件：client_id&&job_id&&progress_info=3のユーザーを表記</p>
<p>表で出す</p>
<p>名前</p> -->

<div class="container">
    <!-- この中にコンテンツ -->
    <h1>プロジェクト名：{{$job_title}}</h1>

    <form action="{{ url('PlayerAssessmentDone') }}" method="GET">




    <table>
    <thead>
        <th>プロジェクト参加者名</th>
        <th>評価</th>
        <th>コメント</th>
    </thead>
    <tbody>
    </tbody>
    @if (count($users) > 0)
    @for ($i=0;$i<@count($users);$i++)
    <input type="hidden" name="id{{$i}}" value="{{$users[$i]->id}}">
    <tr>
        <td>{{$users[$i]->name}}　{{$users[$i]->user_name_mei}}</td>
        <td>
            <select id="user_assess{{$users[$i]->id}}" type="text" name="user_point{{$i}}" value="{{old('user_point')}}" class="form-control" placeholder="">
                <option value="">（選択）</option>
                <option value="15">またお願いしたい</option>
                <option value="10">貢献度大</option>
                <option value="5">感謝</option>
            </select>
        </td>
        <td>
        <textarea type="text" name="user_worrying{{$i}}" value="{{old('user_worrying')}}" placeholder="ご記載いただいた内容は参加者に届けられます。参加者の成長につながるようなコメントや感謝のコメントをご記入いただきたいと思います。"></textarea>
        </td>
        <!-- id紐づけ -->
    </tr>  
    @endfor
    <input type="hidden" name="kosuu" value="{{$i}}">
    @endif
    </table>

    <p>全てのvalueが埋まらないと評価完了できないようにする。</p>
    <div class="form-group">
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">
                評価完了
            </button>
        </div>
    </div>

</form>

</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
