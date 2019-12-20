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

    <div>
        <p>プロジェクト進捗</p>
        @if($job->job_status === 1)
            募集中
        @elseif($job->job_status === 2)
            プロジェクト進行中
        @elseif($job->job_status === 3)
            評価待ち
        @elseif($job->job_status === 4)
            プロジェクト終了済み
        @endif
        <p></p>
    </div>

    <div>
        <p>プロジェクトのタイトル</p>
        <p>{{$job->job_title}}</p>
    </div>

    <div>
        <p>プロジェクトの写真</p>
    </div>

    <div>
        <p>相談したいこと</p>
        <p>{{$job->job_title}}</p>
        <p>募集人数</p>
        <p>{{$job->request_number}}</p>

    </div>

    <div>
        <p>プロジェクト概要</p>
        <p>{{$job->job_text}}</p>
    </div>

    <div>
    <table>
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
