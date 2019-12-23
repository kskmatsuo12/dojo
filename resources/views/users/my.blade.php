<?php

use Illuminate\Support\Facades\Auth;
use App\Suggestion;
use App\Job;

$user_id = Auth::id();
$suggestions = Suggestion::where('user_id', $user_id)->get();

?>


<style>
    
body {
    background:#f2feff;
    padding-top:0;
}
    
a {
    color: #575757;
}

.contains{
    display: flex;
    justify-content: center;
    margin:20px auto;
    width:90%;
}
.contain{
    display:inline-block;
}


.pjts{
    float: left;
    position: relative;
    width:153px;
    text-align: center;
    padding:10px;
    margin-bottom:150px;
}

.pjts:hover{
    opacity:0.6;
}

.pjt img{
    width:144px;
}

.info{
    position: absolute;
    top: 152%;
    left: 53%;
    width:145px;
    height:150px;
    padding: 10px;
    background: white;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    box-shadow: 1px 4px 4px rgb(82, 147, 151);
}

.pjt_term{
    font-size: 13px;
    color: rgb(67,196,207);
    margin:5px 0 10px;

}
.pjt_title{
    font-size: 13px;
    margin:5px 0 5px;
}
.pjt_name{
    font-size: 10px;
    margin:5px 0 5px;
}

.line h1{
    padding-top:20px;
    text-align: center;
    height: 60px;
    line-height: 50px;
    font-size: 18px;
    font-weight: bold;
    color:rgb(67,196,207);
    letter-spacing:1px;
}

.line h2{
    text-align: center;
    background: rgb(67,196,207);
    height: 5px;
    width:50px;
    margin: 0 auto 20px;
    border-radius: 50px;
}



.btn{
    background: rgb(67,196,207);
    box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    padding:10px;
    color:#ffffff;
}
.carousel-item h1{
    font-weight: bold;
}

@media screen and (min-width: 781px) {
    .contains{
        display: flex;
        justify-content: center;
        margin:20px auto;
        width:94%
    }
    .pjts{
        float: left;
        position: relative;
        width:210px;
        text-align: center;
        padding:10px;
        margin: 20px 20px 140px 20px;
    }

    .pjt img{
        width:211.9px;
        
    }

    .info{
        position: absolute;
        top: 130%;
        left: 55%;
        width:213px;
        height:150px;
        padding: 10px;
        background: white;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
}

@media screen and (min-width: 1040px) {
  .container {
    width: 1040px;
    margin: auto;
    width:90%;
  }

}

</style>


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
@include('layouts/header')
<div class="container">
    <!-- この中にコンテンツ -->
            <div class="jobbox">
        <div class="line">
            <h1>現在進捗中</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
            @if (count($suggestions) > 0)
            @foreach ($suggestions as $suggestion)
                <div class="contain">
                    <?php
                    $job1 = Job::where('id', $suggestion->job_id)->get();
                    // echo $job1->id;
                    ?>
                    <div class="pjts">
                    <a href="issues/<?php echo $job1[0]->id ?>" class="link">
                        <div class="pjt">
                            <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                            <div class="info">
                                <p class="pjt_term">{{$job1[0]->recruitment_term}}</p>
                                <p class="pjt_title">{{$job1[0]->job_title}}</p>
                                <p class="pjt_name">{{$job1[0]->consultation}}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->
@include('layouts/sp_menu')
@endsection
