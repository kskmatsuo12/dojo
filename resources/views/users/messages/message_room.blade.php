
@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>
<style>

body{
    background:#f2feff;
}

.box{
    display: flex;
    padding: 0.5em 1em;
    margin: 2em 0;
    color: #5d627b;
    background: white;
    border-top: solid 5px #5d627b;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.22);
}

.box p {
    margin: 0; 
    padding: 0;
}

.box_image {
    height: 50px;
    width: 50px;
    border-radius: 50px;
    margin-right:32px;
    border: 1px solid #ddd;
}

.box_image img {
    height: 50px;
    width: 50px;
    border-radius: 50px;
}

.box_text p {
    line-height: 20px;
    letter-spacing: 1px;
}

.box_time {
    font-size: 12px;
    text-align: right;
}

.message_area {
    padding-bottom: 280px;
    position: relative;
    z-index: 1;
}

.message_input {
    height: 120px;
    width: 100%;
    text-align: center;
    bottom:130px;
    background-color: #f2feff;
    position: fixed;
    z-index: 2;
}

textarea{
    font-size: 12px;
    letter-spacing: 1px;
    height:120px;
    width: 96%;
    padding:5px;
    border-radius: 5px;
    border: 1px solid rgb(168, 168, 168);
    outline: none;
    resize: none;
}

button{
    display: flex;
    justify-content: center;
    width: 100px;
    height: 34px;
    border-radius: 50px;
    background: #75d7e0;
    font-size: 12px;
    font-weight: bold;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto 20px;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
}
button:hover{
    box-shadow: none;
    background: #43c4cf;
}



</style>
<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
<div class="message_area">
    <!-- ループさせる -->
    @foreach ($messages as $message)
    <div class="box">
        @if($message->message_which == 1)
        <div class="box_image">
            <img src={{$user->image_url}}>
        </div>
        <div class="box_text">    
        <p>{{$user->name}} {{$user->user_name_mei}}</p>
        <p>{{$message->message}}</p>
        <p class="box_time">{{$message->created_at}}</p>
        </div>
        @else
        <div class="box_image">
            <img src={{$client->image_url}}>
        </div>
        <div class="box_text">
        <p>名前 {{$client->client_name}}</p>
        <p>{{$message->message}}</p>
        <p class="box_time">{{$message->created_at}}</p>
        </div>
        @endif
    </div>
    @endforeach
</div>
    <!-- ここまでループで回す -->
    <div class="message_input">
        <form  action=" {{ url('messages/post') }}" method="POST">
        {{ csrf_field() }}
        <textarea type="text" placeholder="メッセージ入力" name="message"></textarea>
        <input type="hidden" value="{{$user->id}}" name="user_id">
        <input type="hidden" value="{{$client->id}}" name="client_id">
        <input type="hidden" value="{{$room_id}}" name="room_id">
        <button type="submit">送信する</button>
        </form>
    </div>

</div>
@include('layouts/sp_menu')
<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection