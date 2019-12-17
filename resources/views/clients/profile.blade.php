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
    <h1>基本情報入力・修正</h1>
    @include('common.errors')
    <form action="{{ url('client/update') }}" method="POST" class="">
    {{ csrf_field() }}
        <div class="form-group">
            <div><input type="text" name="client_loc" value="{{$client->client_loc}}" class="form-control" id="top_form" placeholder="所在地(テキストで仮置き)"></div>
            <div><input type="text" name="client_url" value="{{$client->client_url}}" class="form-control" id="top_form" placeholder="貴社ホームページＵＲＬ"></div>
            <div><input type="text" name="client_biz" value="{{$client->client_biz}}" class="form-control" id="top_form" placeholder="事業内容"></div>
            <div><input type="number" name="client_num_emp" value="{{$client->client_num_emp}}" class="form-control" id="top_form" placeholder="従業員数"></div>
            <div><input type="text" name="client_matter" value="{{$client->client_matter}}" class="form-control" id="top_form" placeholder="相談したいこと"></div>
        </div>

        <div class="form-group">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">
                修正
                </button>
            </div>
        </div>
    </form>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
