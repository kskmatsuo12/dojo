@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <h1>企業様　ログイン</h1>
    @include('common.errors')
    <form action="{{ url('/clients/ClientLogin') }}" method="POST" class="">
    {{ csrf_field() }}
        <div class="form-group">
            <div><input type="text" name="client_loginid" value="{{old('client_loginid')}}" class="form-control" id="top_form" placeholder="ID"></div>
            <div><input type="text" name="client_pass" value="" class="form-control" id="top_form" placeholder="password"></div>
        </div>

        <div class="form-group">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">
                ログイン
                </button>
            </div>
        </div>
    </form>

</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
