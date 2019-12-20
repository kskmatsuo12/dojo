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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
</head>



<style>

body{
  background:#f2feff;
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
<!-- CSSファイルの指定をしてください〜 -->
@section('content')

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
                    <a href="issues/<?php echo $job1[0]->id ?>">
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