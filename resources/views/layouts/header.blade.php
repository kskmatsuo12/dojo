<?php
use App\PushMessageToUser;

$push = PushMessageToUser::where('user_id', Auth::id())->get();
$toggle = $push[0]->toggle;
$room_id = $push[0]->room_id;

?>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>

<div class="header sp_menu">
    <div class="brand_img">
        <a href="{{url('/home')}}"><img alt="logo" class="logo" src="https://ksk-tennis.sakura.ne.jp/dojo/public/images/dojo.png"></a>
    </div>
    <div>
        <div class="header-icon">
            @if($toggle == 1)
            <a id="open"><i class="fas fa-bell push" style="color: blue;"></i></a>
            <a id="push_message" class="push_message" href="{{url('/push/'.$room_id)}}">
                新着のメッセージが1件あります。
            </a>
            @else
            <a><i class="fas fa-bell push"></i></a>
            <a id="push_message" class="push_message" href=""></a>
            @endif
            <!-- <a href=""><i class="fas fa-user-circle"></i><a> -->
            <a href="{{url('/logout')}}">logout</a>
        </div>
    </div>
</div>
<div class="header-space"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ksk-tennis.sakura.ne.jp/dojo/public/js/header.js"></script>
<style>
    .push{
        position:relative;
    }

    #push_message {
        display: none;
    }

    .push_message{
        background-color: #f2feff;
        color: blue;
        position: absolute;
        top:50px;
        right:0;
        padding: 10px;
        border-radius: 10px;
    }

    .push_message span{
        color: blue;
        border-bottom: 1px solid #ddd;
    }
    </style>