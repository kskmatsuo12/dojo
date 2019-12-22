<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->


<?php
use App\Job;
?>

@extends('layouts.app')
@include('layouts/header')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
</head>


<style>
.btn{
    background: rgb(67,196,207);
    padding:15px;
    color:#ffffff;
}

.btn:hover{
    background: #75d7e0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    color:#ffffff;
}

.carousel-item h1{
    font-weight: bold;
    font-size:30px;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.9);
}

.carousel-item p{
    text-shadow: 2px 1px 2px rgba(0,0,0,0.4);
}

body{
    background:#f2feff;
    padding-top: 0rem;
    color: #5a5a5a;
    font-family: 'M PLUS 1p', sans-serif;
}

.contains{
    display: flex;
    justify-content: center;
    margin:20px auto;
    width:100%;
}
.contain{
    display:inline-block;
}

.pjts{
    float: left;
    position: relative;
    width:150px;
    text-align: center;
    height:220px;
    margin:20px 10px 30px 10px;
    overflow: hidden;
    box-shadow: 2px 2px 4px rgb(82, 147, 151);
}

.pjts:hover{
    opacity:0.6;
}

.pjt img{
    width:150px;
}

.info{
    position: absolute;
    top: 68%;
    left: 50%;
    width:150px;
    height:150px;
    padding: 10px;
    background: white;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);

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
.carousel-control-next:hover{
    background: rgba(67,196,207, 0.2);
}
.carousel-control-prev:hover{
    background: rgba(67,196,207, 0.2);
}
.link{
    color: #575757;
}

.skill{
    position: absolute;
    background: rgba(67,196,207);
    color: white;
    top: -38%;
    left: 22%;
    font-size: 10px;
    border-radius: 10px;
    padding: 6px;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);

    box-shadow: 0px 0px 5px rgba(255,255,255,0.3);

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
        width:240px;
        text-align: center;

        height:220px;
        margin:20px 10px 30px 10px;
        overflow: hidden;
        box-shadow: 2px 2px 4px rgb(82, 147, 151);
    }

    .pjt img{
        width:240px;
        
    }

    .info{
        position: absolute;
        top: 73%;
        left: 50%;
        width:240px;
        height: 120px;
        padding: 10px;
        background: white;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    .skill {
        position: absolute;
        background: rgba(67,196,207);
        color: white;
        top: -67%;
        left: 16%;
        font-size: 11px;
        border-radius: 10px;
        padding: 7px;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        box-shadow: 0px 0px 5px rgba(255,255,255,0.3);

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

    <main role="main">

         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="https://skillshift-production.s3.ap-northeast-1.amazonaws.com/file1575633990-179.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>複数事業を横断するマーケティング</h1>
                            <p>弊社は食品卸売を行う中小企業です。マーケティング領域で横断的に戦略の設計や、社長との壁打ちをお願いしたい。ブレーンとして幅広く頼れる方々との出会いを希望します！</p>
                            <p><a class="btn" href="#" role="button">プロジェクトを見る</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="https://d1f5hsy4d47upe.cloudfront.net/5a/5a7eb6d9b17bd823e642d7b492777949_t.jpeg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>飲食店チェーンへ営業強化を図りたい</h1>
                            <p>関東近郊のドミナント経営の飲食店への営業強化、販促強化のお手伝いしていただける方を探しています！営業組織の生産性向上などについてディスカッションしたい！</p>
                            <p><a class="btn" href="#" role="button">プロジェクトを見る</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="https://d1f5hsy4d47upe.cloudfront.net/e5/e573afd47ac7709ba3aeb4bbbc37197c_t.jpeg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>地方発の新たな事業モデルを検討</h1>
                            <p>弊社は西東京で電気工事業を営む中小企業です。ドローンを活用した新たな事業アイデアを一緒に考え提案していただける方、地方発の新たな事業モデルの構築をお手伝い頂ける方を募集します！</p>
                            <p><a class="btn" href="#" role="button">プロジェクトを見る</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>

<div class="container">
    <div class="jobbox">

        <div class="line">
            <h1>現在進捗中</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
            @if (count($suggestions) > 0)
                <div class="contain">
                    @foreach ($suggestions as $suggestion)
                    <?php
                    $job1 = Job::where('id', $suggestion->job_id)->get();
                    // echo $job1->id;
                    ?>
                    <div class="pjts">
                    <a href="issues/<?php echo $job1[0]->id ?>" class="link">
                        <div class="pjt">
                            <img src="https://www.skill-shift.com/jobs/3761?new_arrival_page=1" alt="">
                            <div class="info">
                                <p class="pjt_term">{{$job1[0]->recruitment_term}}</p>
                                <p class="pjt_title">{{$job1[0]->job_title}}</p>
                                <p class="pjt_name">{{$job1[0]->recruit_advisor}}</p>
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
            <h1>新着</h1>
            <h2>　　</h2>
        </div>

        <div class="contains">
        @if (count($jobs) > 0)
            <div class="contain">
                @foreach ($jobs as $job)
                <div class="pjts">
                <a href="issues/<?php echo $job->id ?>" class="link">
                    <div class="pjt">

                        <img src="https://skillshift-production.s3.ap-northeast-1.amazonaws.com/file1575512880-802.png" alt="">
                        <div class="info">
                            <p class="pjt_term">{{$job->recruitment_term}}</p>
                            <p class="pjt_title">{{$job->job_title}}</p>
                            <p class="pjt_name">{{$job->consultation}}</p>
                            <h3 class="skill">{{$job->recruit_advisor}}</h3>
                        </div>

                    </div>
                </a> 
                </div>

                @endforeach
            </div>
            @endif
        </div>
    </div>

</div>

@include('layouts/sp_menu')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<!-- JSファイルの指定してください！ -->
<!-- <script src="{{ asset('js/???.js') }}"></script> -->
<!-- JSファイルの指定してください！ -->

@endsection