<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->
<?php

?>


@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clients/suggestions/index.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
</head>


@section('content')
@include('layouts/header')
<div class="container">
    <!-- この中にコンテンツ -->
  
 
    <div class="issues_index1">
        
        <!-- タイトル -->
        <div class="section1">
            <h2>プロジェクトの応募詳細</h2>
        </div>

        <div class="client_wrap">
            <div class="client_title">
            <a href="/clients/my/index/{{$job->id}}"><p><span>プロジェクト名：</span><br>{{$job->job_title}}</p></a>
                <!-- <div class="project_url">
                    <a href="/clients/my/index/{{$job->id}}"><p>プロジェクトの内容を確認する</p></a>
                </div> -->
            </div>
            <div class="section1">
                <span><i class="fas fa-user-circle"></i>応募者</span>
            </div>
            <div class="section2">
                <div class="section2-left">
                    <img class="user_image" src="{{$user->image_url}}">
                    <span>名前:</span>
                    <span> {{$user->name}}{{$user->user_name_mei}}</span>
                    <a href="/clients/players/{{$user->id}}">応募者の詳細</a>
                </div>
                
            </div>
            <!-- <div class="section3">
                <a href="/clients/players/{{$user->id}}">応募者の詳細</a>
            </div> -->
               <div class="issues_index2">
        <div class="section6">
            <span><i class="fas fa-comments"></i>応募内容</span>
            <p>{{$suggestion->suggestion_text}}</p>
        </div>


    </div>
        
    <div class="issues_index2">
        <form action="{{url('/clients/accept')}}" method="POST">
                {{ csrf_field() }}
            <input type="hidden" name="suggestion_id" value="{{$suggestion->id}}">
            <button type="submit" class="btn">
                この人に依頼する
            </button>
            
        </form>
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->





<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>






@endsection
