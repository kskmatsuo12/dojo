<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->
<?php
 
?>


@extends('layouts.app')
@include('layouts/header')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users/issues/index.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>
<style>

.job_text_message{
    font-size: 14px;
    margin-bottom: 18px;
    /* text-decoration: underline; */
}
.job_wrap i{
    color:rgb(67,196,207);
    font-size: 40px;
    margin: 10px 0px 30px 20px;
}

.job_wrap{
    text-align: center;
    margin-top: 20px;
}


.job_text{
    /* font-size: 16px;
    margin: 0 0 0 auto;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 20px 25px;
    border-radius: 10px;
    border: 5px solid rgb(67,196,207,0.1);
    background-color: #fff;
    width: 55%; */
    position: relative;
    display: inline-block;
    margin-left: 5px;
    line-height: 16px;
    padding: 10px;
    min-width: 120px;
    max-width: 65%;
    color: white;
    font-size: 13px;
    background: rgb(67,196,207);
    border-radius: 15px;
}

.job_text:before {
    content: "";
    position: absolute;
    top: 55%;
    right: -28px;
    margin-top: -15px;
    border: 15px solid transparent;
    border-left: 15px solid rgb(67,196,207);
    z-index: 0;
}


.job_table_label{
    width: 80%;
    margin: 30px auto 10px;
    margin-bottom: 12px;
    font-size: 16px;
    font-weight: bold;
}

.job_table{
    width: 90%;
    margin: 15px auto 30px;
    font-size:12px;
}

.job_table_left{
    text-align: center;
    font-weight: bold;
    width: 30%;
    background-color: rgb(67,196,207,0.2);
    border-top: 0.5px solid rgb(67,196,207,0.1);
    border-bottom: 0.5px solid rgb(67,196,207,0.1);
    border-right: 0.5px solid rgb(67,196,207,0.1);
    padding: 12px;

}

.job_table_right{
    margin-top: 10px;
    width: 60%;
    background-color: #fff;
    border-top: 0.5px solid rgb(67,196,207,0.1);
    border-bottom: 0.5px solid rgb(67,196,207,0.1);
    padding: 12px;
}

.section10 {
  margin-top: 12px;
  margin-bottom: 18px;
}

.section10 span {
padding-left: 20px;
  color:gray;
}

.section10 span i {
  padding-right: 8px;
  color:rgb(67,196,207);
}

table{
    margin: 0 auto;
    display: flex;
    justify-content: center;
    border: 1px solid rgb(67,196,207,0.2);
    border-radius: 5px;
    border-collapse: separate;
    box-shadow: 0px 1px 3px rgb(82, 147, 151);
    overflow: hidden;
}

</style>

@section('content')

<div class="container">
    <!-- この中にコンテンツ -->

    @if($did == true)
    <p class="red">応募済み</p>

    @endif

    <div class="issues_index1">
        
        <!-- タイトル -->
        <div class="section1">
            <h2>{{$job->job_title}}</h2>
        </div>

        <div class="client_wrap">
            <div class="client_title">

                <p>{{$client[0]->client_name}}</p>
            </div>
            <div class="client_url">
                <a href="{{$client[0]->client_url}}"><p>{{$client[0]->client_url}}</p></a>
            </div>
            <ul class="client_kind">
                <li><i class="fas fa-home"></i> 事業内容: {{$client[0]->client_biz}} </li>
                <li><i class="fas fa-flag"></i> 社員数: {{$client[0]->client_num_emp}} 名</li>
                <li><i class="fas fa-map-marker-alt"></i> 所在地: {{$client[0]->client_loc}} </li>

            </ul> 
        </div>
        
        <!-- 探している人のカテゴリー -->
        <div class="section2">
        </div>
        <div class="issues_img">
            <img alt="プロジェクト画像" class="issues_image" src="{{asset('/images/issuesindex.jpg')}}">
            <h3><span class="skill">{{$job->recruit_advisor}}</span></h3>
        </div>

        <div class="job_wrap">
            <div class="job_text">
                <p class="job_text_message">担当者からのメッセージ</p>
                <div>{{$job->job_text}}</div>
                
            </div>
            <i class="fas fa-envelope"></i>
        </div>


        <div class="job_table_wrap">
        <!-- <p class="job_table_label"><i class="fas fa-table"></i>　案件の具体的な内容</p>   -->

        <div class="section10">
            <span><i class="fas fa-table"></i>プロジェクトの具体的な内容</span>
        </div>

        <table class="job_table">
            <tr>
                <td class="job_table_left">締切</td>
                <td class="job_table_right">{{$job->recruitment_term}}</td>
            </tr>
            <tr>
                <td class="job_table_left">募集人数</td>
                <td class="job_table_right">{{$job->request_number}}人</td>
            </tr>
            <tr>
                <td class="job_table_left">面談方法</td>
                <td class="job_table_right">{{$job->interview_format}}</td>
            </tr>
            <tr>
                <td class="job_table_left">面談場所</td>
                <td class="job_table_right">{{$job->interview_place}}</td>
            </tr>
            <tr>
                <td class="job_table_left">業務方法</td>
                <td class="job_table_right">{{$job->work_format}}</td>
            </tr>
            <tr>
                <td class="job_table_left">業務場所</td>
                <td class="job_table_right">{{$job->interview_place}}</td>
            </tr>
        </table>
    </div>
        <!-- <div class="section3">
            <div class="section3-left"><span>締切</span></div>
            <div class="section3-right"><span>募集</span></div> 
        </div>
        
        <div class="section4">
            <div class="section4-left"><span>面談方法</span></div>
            <div class="section4-right"><span>面談場所</span></div>
        </div>
        <div class="section8">
            <div class="section8-left"><span>業務方法</span> </div>
            <div class="section8-right"><span>業務場所</span></div>
        </div>
    </div>
    <div class="section5">
        
    </div> -->
    <div class="issues_index2">
        <div class="section6">
            <span><i class="fas fa-comments"></i>プロジェクトの概要</span>
            <p>{{$job->job_text}}</p>
        </div>
        <div class="section7">
            <span><i class="fas fa-comments"></i>提案時にご記載いただきたいこと</span>
            <p>{{$job->request_fill_out}}</p>
        </div>
        

        <form action="{{url('proposal')}}" method="POST">
                {{ csrf_field() }}
            <input type="hidden" name="job_id" value="{{ $job->id }}">
            @if($did==true)
            <button disabled class="btn disable_button">
                応募済み
            </button>
            @else
            <button type="submit" class="btn">
                応募する
            </button>
            @endif
        </form>
        @if($did==true)
            @if($suggestion->progress_info === 3)
                <form action="{{url('/issue/assessment')}}" method="GET">
                    <input type="hidden" name="id" value="{{ $job->id }}">
                    <button type="submit" class="btn">
                            評価する
                    </button>
                </form>
            @endif
        @endif

    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->





<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>




@include('layouts/sp_menu')

@endsection
