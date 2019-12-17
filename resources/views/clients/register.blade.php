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

    <h1>企業名をご入力ください</h1>
    @include('common.errors')
    <form action="{{ url('???') }}" method="POST" class="">
    {{ csrf_field() }}
        <div class="form-group">
            <div><input type="text" name="client_name" value="{{old('client_name')}}" class="form-control" id="top_form" placeholder="貴社名"></div>
            <div><input type="text" name="client_kana" value="{{old('client_kana')}}" class="form-control" id="top_form" placeholder="貴社名（全角カナ）"></div>
            <div><input type="text" name="client_id" value="{{old('client_id')}}" class="form-control" id="top_form" placeholder="ID　半角英数字6～12文字英字"></div>
            <div><input type="text" name="client_pass" value="" class="form-control" id="top_form" placeholder="password 半角英数字6～12文字英字"></div>
            <div><input type="text" name="" value="" class="form-control" id="top_form" placeholder="password（確認）"></div>
        </div>

        <div class="form-group">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">
                会員登録（無料）
                </button>
            </div>
        </div>
    </form>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
