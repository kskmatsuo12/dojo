<!-- メッセージの詳細画面！ -->
<!-- ここでメッセージを送信しあう感じ！ -->
<?php
echo $rooms;
?>

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
    @foreach ($rooms as $room)
    <div>
        
    </div>
    <!-- この中にコンテンツ -->
    
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
