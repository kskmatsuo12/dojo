@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/issues/proposal.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <div>
        <h1>企業様へのメッセージ</h1>
        <p>
            当案件において、現時点でどんなことで力になれそうか、また今回の取り組みどんなことが学びたいかご記入ください。
        </p>
    </div>
    <div>
        <form action="{{ url('profile2Store') }}" method="POST">
        <input type="textarea" name="suggestion_text" value="{{old('suggestion_text')}}" class="form-control" placeholder="要検討">
        </form>   
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/issues/proposal.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
