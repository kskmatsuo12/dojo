<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->
<?php
$suggestions=[];

?>

@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users/home.css') }}">
</head>
<style>
body{
  background:#f2feff;
}

.contains{
    display: flex;
    justify-content: center;
    margin:20px auto;
    width:90%
}

.pjts{
    float: left;
    position: relative;
    width:145px;
    text-align: center;
    padding:10px;
    margin-bottom:120px;
}

.pjt img{
    width:144px;
}

.info{
    position: absolute;
    top: 140%;
    left: 50%;
    width:125px;
    height:100px;
    padding: 10px;
    background: white;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.pjt_term{
    font-size: 13px;
    font-weight: bold;
    color: rgb(67,196,207);
    margin:5px 0 10px;

}
.pjt_title,.pjt_name{
    font-size: 13px;
    font-weight: bold;
    color: rgb(37, 37, 37);
    margin:5px 0 5px;
}
.line h1{
    padding-top:20px;
    text-align: center;
    height: 50px;
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

@media screen and (min-width: 781px) {
    .contains{
        display: flex;
        justify-content: center;
        margin:20px auto;
        width:80%
    }
    .pjts{
        float: left;
        position: relative;
        width:210px;
        text-align: center;
        padding:10px;
        margin-bottom:120px;
    }

    .pjt img{
        width:210px;
    }

    .info{
        position: absolute;
        top: 125%;
        left: 50%;
        width:190px;
        height:100px;
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
<!-- CSSファイルの指定をしてください〜 -->
@section('content')
<div class="container">

    <div class="line">
        <h1>現在進捗中</h1>
        <h2>　　</h2>
    </div>

    <div class="contains">
        @if (count($suggestions) > 0)
                <div class="contain">
                    @foreach ($suggestions as $suggestion)
                    <div class="pjts">
                    <a href="issues/<?php echo $job->id ?>">
                        <div class="pjt">
                            <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                            <div class="info">
                                <p class="pjt_term">{{$suggestion->recruitment_term}}</p>
                                <p class="pjt_title">{{$suggestion->job_title}}</p>
                                <p class="pjt_name">{{$suggestion->consultation}}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>


    <div class="line">
        <h1>新着</h1>
        <h2>　　</h2>
    </div>

    <div class="contains">
    @if (count($jobs) > 0)
        <div class="contain">
            @foreach ($jobs as $job)
            <div class="pjts">
                <div class="pjt">
                    <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                    <div class="info">
                        <p class="pjt_term">{{$job->recruitment_term}}</p>
                        <p class="pjt_title">{{$job->job_title}}</p>
                        <p class="pjt_name">{{$job->consultation}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>


</div>
@include('layouts/sp_menu')

<!-- JSファイルの指定してください！ -->
<!-- <script src="{{ asset('js/???.js') }}"></script> -->
<!-- JSファイルの指定してください！ -->

@endsection