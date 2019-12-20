<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- controllerができたらifとforeachに@、関数に{{}}を追加 -->
<!-- テーブルがない場合、↓を読み込み -->
<?php
use App\User;
//おすすめのユーザー5人
$users = User::take(5)->get();

?>
<style>
body{
  background:#f2feff;
}

.contains{
    display:?flex;
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

button{
    display: flex;
    justify-content: center;
    width: 150px;
    height: 50px;
    border-radius: 50px;
    background: #75d7e0;
    font-size: 16px;
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
span{
    font-size: 10px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    height: 12px;
    border-radius: 4px;
}

tr{
    vertical-align: middle;
    height: 30px;
    margin: 20px auto;
    letter-spacing:1px;
    
}



th{
    background:rgb(67,196,207,0.3);
    vertical-align: middle;
    height:30px;
    /* border-bottom: 1px solid rgb(21, 163, 75,0.1); */
    padding: 0 15px;
    width:20%;
}

td{
    background:white;
    padding:20px 10px;
    vertical-align: middle;
    display: table-cell;
    /* text-align:left; */
    align-items:center;


}
table{
    margin: 0 auto;
    width:100%;
    display:?flex;
    justify-content: center;
    border: 1px solid rgb(67,196,207,0.5);
    border-radius: 10px;
    border-collapse: separate;
    box-shadow: 0px 1px 3px rgb(82, 147, 151);
    overflow: hidden;
    text-align: center;
}

@media screen and (min-width: 781px) {
    .contains{
        display:?flex;
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
@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>


<!-- CSSファイルの指定をしてください? -->

@section('content')
<div>image画像取り込む</div>
<div class="container">


    <div class="line">
        <h1>公募の作成</h1>
        <h2>　　</h2>
    </div>
    <form   action="{{ url('clients/post')}}">
    <button class="">作成する</button>
    </form>
    </div>

    <div class="jobbox">

        <div class="line">
            <h1>募集中</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
            @if (count($jobs) > 0)
                <div class="contain">
                    @foreach ($jobs as $job)
                    <?php
                    $job1 = Job::where('jobstatus',1)->get();
                    // echo $job1->id;
                    ?>
                    <div class="pjts">
                    <a href="{{ url('clients/my/index/'.$job->id) }}">

                        <div class="pjt">
                            <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                            <div class="info">
                                <p class="pjt_term">{
                                {$job->work_term}}</p>
                                <p class="pjt_title">{{$job->job_title}}</p>
                                <p class="pjt_name"> {{$job->responsible_party}}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="line">
            <h1>プロジェクト中</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
            @if (count($jobs) > 0)
                <div class="contain">
                    @foreach ($jobs as $job)
                    <?php
                    $job1 = Job::where('jobstatus',2)->get();
                    // echo $job1->id;
                    ?>
                    <div class="pjts">
                    <a href="{{ url('clients/my/index/'.$job->id) }}">

                        <div class="pjt">
                            <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                            <div class="info">
                                <p class="pjt_term">{
                                {$job->work_term}}</p>
                                <p class="pjt_title">{{$job->job_title}}</p>
                                <p class="pjt_name"> {{$job->responsible_party}}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="line">
            <h1>評価待ち</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
            @if (count($jobs) > 0)
                <div class="contain">
                    @foreach ($jobs as $job)
                    <?php
                    $job1 = Job::where('jobstatus',3)->get();
                    // echo $job1->id;
                    ?>
                    <div class="pjts">
                    <a href="{{ url('clients/my/index/'.$job->id) }}">

                        <div class="pjt">
                            <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                            <div class="info">
                                <p class="pjt_term">{
                                {$job->work_term}}</p>
                                <p class="pjt_title">{{$job->job_title}}</p>
                                <p class="pjt_name"> {{$job->responsible_party}}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>


    <div class="jobbox">
    <div class="line">
        <h1>おすすめユーザー</h1>
        <h2>　　</h2>
    </div>

    <div class="contains">
    @if (count($users) > 0)
        <div class="contain">
            @foreach ($users as $user)
            <div class="pjts">
                <div class="pjt">
                    <img src="https://static.camp-fire.jp/uploads/project_version/image/331374/5fd91b4a-a70b-40fe-ae2c-1545fa0250fa.jpg?ixlib=rails-2.1.4&w=1024&h=682&fit=clip&auto=format" alt="">
                    <div class="info">
                        <p class="pjt_term">{{$user->user_prefectures}}</p>
                        <p class="pjt_title">{{$user->user_exp_business}}</p>
                        <p class="pjt_name">{{$user->user_exp_job}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>



<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
