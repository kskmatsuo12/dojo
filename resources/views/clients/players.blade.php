@extends('layouts.app')

<?php

?>
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/clients/players.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>プレイヤー一覧</h1>
        <p class="lead">会社の経営課題や事業課題を外部の人材と一緒にディスカッションしましょう！</p>
    </div>
    <div class="message_area">
        <!-- ループさせる -->
        @foreach($users as $user)
        
        <a href="/clients/players/{{$user->id}}">
        <div class="box">
            <div class="box_image">
                <img src={{$user->image_url}}>
            </div>
            <div class="box_text">    
                <p>経験：{{$user->user_exp_business}}</p>
                <p>名前： {{$user->user_name_kana}}　{{$user->user_name_mei}}　様</p>
                <p>会社名： {{$user->user_last_company}}</p>
                
            </div>
        </div>
    </a>
        @endforeach
    </div>
</div>
<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->
@include('layouts/sp_menu_client')


@endsection


