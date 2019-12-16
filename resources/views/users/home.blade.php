<!-- userのホーム画面 -->

@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users/home.css') }}">
</head>

<!-- CSSファイルを読み込んでください〜 -->

@section('content')

<div class="container">
    @include('/layouts/sp_menu')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <!-- @if (session('status')) -->
                        <div class="alert alert-success">
                            <!-- {{ session('status') }} -->
                        </div>
                    <!-- @endif -->

                    <h1>You are logged in!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/users/home.js') }}"></script>
@endsection
