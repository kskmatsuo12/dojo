@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/users/issues/comfirm.css') }}">
    <!-- CSSファイル指定してください -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<!-- CSSファイルの指定をしてください〜 -->
<!-- suggestion_text,client_id,job_idが渡ってくる -->
<!-- $jobで該当する案件がくるようにする。現時点はidがくるようになってる。 -->

@section('content')
@include('layouts/header')
<div class="container">
       <div class="line">
        <h1>応募確認フォーム</h1>
        <h2>　　</h2>
    </div>
    <!-- この中にコンテンツ -->
      <div class="wraps">
        <form action="{{url('post_suggestion')}}" method="POST">    
         {{ csrf_field() }}
                <input type="hidden" name="job_id" value="{{$job_id}}">
                <input type="hidden" name="client_id" value="{{$client_id}}">
                <!-- <textarea type="text" name="suggestion_text">test用</textarea> -->
                <div class="wrap">
                    <p class="title">以下の内容で送信しますか？</p>
                    
                    <textarea readonly style="border:none" type="text" name="suggestion_text" value="{{old('job_text')}}" class="textarea">{{$suggestion_text}}</textarea>
                </div>
                <input type="hidden" name="progress_info" value="1">
                <button type="submit">送信する</button>
        </form> 
        </div>
    </form>
</div>
@include('layouts/sp_menu')

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
