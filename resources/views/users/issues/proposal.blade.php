@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/users/issues/proposal.css') }}">
    <!-- CSSファイル指定してください -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<!-- CSSファイルの指定をしてください〜 -->


@section('content')
@include('layouts/header')
<div class="container">
    <!-- この中にコンテンツ -->

    <div class="line">
        <h1>応募フォーム</h1>
        <h2>　　</h2>
    </div>
    <div>
        <div class="wraps">
        <form method="POST" action="{{ url('comfirm') }}" >
        {{ csrf_field() }}
                <input type="hidden" name="job_id" value="{{$job_id}}">
                <input type="hidden" name="client_id" value="{{$client_id}}">
                <input type="hidden" name="user_id" value="{{$user_id}}">
                <!-- <textarea type="text" name="suggestion_text">test用</textarea> -->
                <div class="wrap">
                    <p class="title">提案内容<span class="req">必須</span></p>
                    <textarea type="text" name="suggestion_text" value="{{old('job_text')}}" placeholder="例）この度○○領域で自分の力を試したいと思っています。弊社の次世代のビジネスを担う新規事業案について、一緒にディスカッションさせてください。"></textarea>
                </div>
                <input type="hidden" name="progress_info" value="1">
                @if ($did)

                <p class="red">(応募済みのプロジェクトです)</p>
                
                @else
                <button type="submit">応募する</button>
                @endif
        </form> 
        </div>
    </div>
</div>

</div>
@include('layouts/sp_menu')
<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/users/issues/proposal.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
