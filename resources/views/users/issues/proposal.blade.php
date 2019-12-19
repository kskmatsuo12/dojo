@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/issues/proposal.css') }}">
    <!-- CSSファイル指定してください -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<?php echo $job_id?>
<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <h2>提案文</h2>
    <div>
        <form method="POST" action="{{ url('comfirm') }}" >
        {{ csrf_field() }}
                <input type="hidden" name="job_id" value="1">
                <input type="hidden" name="client_id" value="1">
                <input type="hidden" name="user_id" value="1">
                <textarea type="text" name="suggestion_text">test用</textarea>
                <input type="hidden" name="progress_info" value="1">
                <button type="submit">応募する</button>
        </form> 
    </div>
</div>
<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/issues/proposal.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
