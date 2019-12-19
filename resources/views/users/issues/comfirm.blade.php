@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<!-- CSSファイルの指定をしてください〜 -->
<!-- suggestion_text,client_id,job_idが渡ってくる -->
<!-- $jobで該当する案件がくるようにする。現時点はidがくるようになってる。 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <h2>提案文の確認</h2>
    <p>以下の内容で送信しますか？</p>
    <p>{{$suggestion_text}}</p>
    <form action="{{url('post_suggestion')}}" method="POST">
         {{ csrf_field() }}
    <input value="{{$suggestion_text}}" name="suggestion_text">
    <input value="{{$client_id}}" name="client_id">
    <input value="{{$job_id}}" name="job_id">
    <button type="submit">送信する</button>

    </form>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
