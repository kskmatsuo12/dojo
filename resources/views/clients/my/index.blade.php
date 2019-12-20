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
    font-size:13px;
}

.container{
    width: 90%;
    margin: 0 auto;
    margin-top: 20px;
}

.client_name{
    font-size: 18px;
    margin: 0 auto;
    margin-top: 30px;
    font-weight: bold;
    width: 70%;
    margin-bottom: 15px;
}

.job_title{
    font-size: 24px;
    margin: 0 auto;
    text-align: center;
    margin-top: 30px;
    font-weight: bold;
    padding-bottom: 20px;
    border-bottom: 1px solid grey;
    width: 70%;
    margin-bottom: 20px;
}

.job_img{
    width: 70%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    
}

.job_img img{
    margin-top: 30px;
    font-weight: bold;
    padding-bottom: 20px;
    width: 70%;
    height: auto;
    border-radius:10px;
}

.job_text_message{
    font-size: 14px;
    margin-bottom: 18px;
    text-decoration: underline;
}

.job_text{
    font-size: 16px;
    margin: 0 auto;
    margin-top: 30px;
    width: 60%;
    margin-bottom: 20px;
    padding: 20px 25px;
    border-radius: 10px;
    border: 5px solid #75d7e0;
    background-color: #fff;
}


@media screen and (min-width: 781px) {

}

@media screen and (min-width: 1040px) {

}

</style>
<!-- CSSファイルの指定をしてください〜 -->

<!-- とってくるデータ　 -->

<!-- 押し込むデータ -->
@section('content')
<div class="container">


    <div class="client_name">依頼主：　{{$client->client_name}}</div>

    <div class="job_title">「{{$job->job_title}}」</div>

    <div class="job_img"> 
         <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
    </div>

    <div class="job_text">
        <p class="job_text_message">担当者からのメッセージ</p>
        <div>{{$job->job_text}}</div>
    </div>

    <table>
    <tr>
        <td>プロジェクトのタイトル</td>
        <td>{{$job->job_title}}</td>
    </tr>

    <tr>
        <td>プロジェクト進捗</td>
        <td>
        @if($job->job_status === 1)
            募集中
        @elseif($job->job_status === 2)
            プロジェクト進行中
        @elseif($job->job_status === 3)
            評価待ち
        @elseif($job->job_status === 4)
            プロジェクト終了済み
        @endif
        </td>
    </tr>

    <tr>
        <td>プロジェクトの写真</td>
        <td>プロジェクトの写真</td>

    </tr>

    <tr>
        <td>相談したいこと</td>
        <td>{{$job->job_title}}</td>
    </tr>
    
    <tr>
        <td>募集人数</td>
        <td>{{$job->request_number}}</td>
    </tr>

    <tr>
        <td>プロジェクト概要</td>
        <td>{{$job->job_text}}</td>
    </tr>

    <tr>
        <td>時間・期間</td>
        <td>{{$job->work_term}}</td>
    </tr>
    <tr>
        <td>相談の形式</td>
        <td>{{$job->work_format}}</td>
    </tr>
    <tr>
        <td>面談場所</td>
        <td>{{$job->interview_place}}</td>
    </tr>
    <tr>
        <td>提案時に記載いただきたいこと</td>
        <td>{{$job->request_fill_out}}</td>
    </tr>
    <tr>
        <td>担当者名</td>
        <td>{{$job->responsible_party}}</td>
    </tr>
    <tr>
        <td>担当者メールアドレス</td>
        <td>{{$job->responsible_email}}</td>
    </tr>
    
    </table>
    
    </div>



</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
