@extends('layouts.app')
@include('layouts/header_client2')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- CSSファイル指定してください -->
</head>
<?php
 use App\Suggestion;
?>

<style>
body{
    background:#f2feff;
    font-size:13px;
    font-family: 'M PLUS 1p', sans-serif;
}

.container{
    width: 90%;
    margin: 0 auto;
    margin-top: 20px;
}

.client_name{
    font-size: 18px;
    margin: 0 auto;
    margin-top: 30px;
    font-weight: bold;
    width: 70%;
    margin-bottom: 15px;
    color:darkgray;
}

.job_title{
    font-size: 24px;
    margin: 0 auto;
    text-align: center;
    margin-top: 30px;
    font-weight: bold;
    padding-bottom: 20px;
    border-bottom: 1px solid grey;
    width: 70%;
    margin-bottom: 20px;
}

.job_img{
    width: 70%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    
}

.job_img img{
    margin-top: 30px;
    font-weight: bold;
    padding-bottom: 20px;
    width: 70%;
    height: auto;
    border-radius:10px;
}

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
}


.job_text{
    /* font-size: 16px;
    margin: 0 0 0 auto;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 20px 25px;
    border-radius: 10px;
    border: 5px solid #75d7e0;
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
    width: 80%;
    margin: 0 auto;
    margin-top: 15px;
    margin-bottom: 20px;
    font-size:12px;
}

.job_table_left{
    text-align: center;
    font-weight: bold;
    width: 30%;
    background-color: rgb(67,196,207,0.2);
    border-top: 2px solid #75d7e0;
    border-bottom: 2px solid #75d7e0;
    border-right: 0.5px solid #75d7e0;
    padding: 12px;

}

.job_table_right{
    margin-top: 10px;
    width: 60%;
    background-color: #fff;
    border-top: 2px solid #75d7e0;
    border-bottom: 2px solid #75d7e0;
    padding: 12px;
}

.user_table{
    width: 80%;
    margin: 0 auto;
    margin-top: 15px;
    margin-bottom: 20px;
    font-size:12px;
}

.user_table_top{
    text-align: center;
    font-weight: bold;
    background-color: #fff;
    border-top: 2px solid #75d7e0;
    border-bottom: 2px solid #75d7e0;
    padding: 12px;
    background-color: rgb(67,196,207,0.2);
}

.user_table_user{
    text-align: center;
    background-color: #fff;
    border-top: 2px solid #75d7e0;
    border-bottom: 2px solid #75d7e0;
    padding: 12px;
    text-decoration:none;
}

.user_table_user a{
    text-decoration:none;
}

.job_table_wrap{
    margin-top:30px;
}


input{
    display: flex;
    justify-content: center;
    width: 150px;
    height: 50px;
    border-radius: 50px;
    background: #75d7e0;
    font-size: 13px;
    font-weight: bold;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto 80px;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
}


input:hover{
    box-shadow: none;
    background: #43c4cf;
}

.job_btn_done{
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
    align-items: center;
}

.job_table_label i{
    color:rgb(67,196,207);
}


@media screen and (min-width: 781px) {
    .job_text{
    position: relative;
    display: inline-block;
    margin: 0 0 0 auto;
    line-height: 20px;
    padding: 18px;
    min-width: 120px;
    max-width: 65%;
    color: white;
    font-size: 15px;
    background: rgb(67,196,207);
    border-radius: 15px;
}
.job_wrap i{
    color:rgb(67,196,207);
    font-size: 50px;
    margin: 20px;
}

.job_table{
    width: 80%;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size:15px;
}
.user_table{
    width: 80%;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size:15px;
}
.job_table_wrap{
    margin-top:60px;
}

}

@media screen and (min-width: 1040px) {

}

</style>

<!-- CSSファイルの指定をしてください〜 -->

<!-- とってくるデータ　 -->

<!-- 押し込むデータ -->
@section('content')
<div class="container">




    <div class="job_title">「{{$job->job_title}}」</div>
    <div class="client_name">{{$client->client_name}}</div>
    <div class="job_img"> 
         <img src="{{$job->image_url}}" alt="job_image">
    </div>

        <div class="job_wrap">
            <div class="job_text">
                <p class="job_text_message">担当者からのメッセージ</p>
                <div>{{$job->job_text}}</div>
                
            </div>
            <i class="fas fa-envelope"></i>
        </div>

    <div class="job_table_wrap">
        <p class="job_table_label"><i class="fas fa-table"></i>　案件の具体的な内容</p>   
        <table class="job_table">
            <tr>
                <td class="job_table_left">時間・期間</td>
                <td class="job_table_right">{{$job->work_term}}</td>
            </tr>
            <tr>
                <td class="job_table_left">相談の形式</td>
                <td class="job_table_right">{{$job->work_format}}</td>
            </tr>
            <tr>
                <td class="job_table_left">面談場所</td>
                <td class="job_table_right">{{$job->interview_place}}</td>
            </tr>
            <tr>
                <td class="job_table_left">提案時に記載いただきたいこと</td>
                <td class="job_table_right">{{$job->request_fill_out}}</td>
            </tr>
            <tr>
                <td class="job_table_left">担当者名</td>
                <td class="job_table_right">{{$job->responsible_party}}</td>
            </tr>
            <!-- <tr>
                <td class="job_table_left">担当者メールアドレス</td>
                <td class="job_table_right">{{$job->responsible_email}}</td>
            </tr> -->
        </table>
    </div>

        @if($job->job_status === 1)    

    <div class="job_table_wrap">
            <p class="job_table_label"><i class="fas fa-users"></i>　現在応募中のユーザー</p>
            <table class="user_table">
                <tr>
                    <td class="user_table_top">名前</td>
                    <td class="user_table_top">都道府県</td>
                    <td class="user_table_top">現在の会社</td>
                    <td class="user_table_top">メールアドレス</td>
                    <td class="user_table_top">受理予定or未回答</td>
                </tr>
            @if (count($user) > 0)
                @foreach ($user as $user)
                    <tr>
                        <td class="user_table_user">{{$user->name}}</td>
                        <td class="user_table_user">{{$user->user_prefectures}}</td>
                        <td class="user_table_user">{{$user->user_exp_company}}</td>
                        <td class="user_table_user">{{$user->email}}</td>

                        <?php
                        $suggestions = Suggestion::where('user_id', $user->id)->where('job_id', $job->id)->first();
                        ?>
                        @if($suggestions->progress_info === 1)
                        <td class="user_table_user"><a href="{{url('clients/suggestions/'.$suggestions->id)}}">未回答</a></td>
                        @else
                        <td class="user_table_user"><a href="{{url('clients/suggestions/'.$suggestions->id)}}">受理予定</a></td>
                        @endif
                    </tr>
                @endforeach
            @endif
            </table>
        </div>

        @endif


    <div>
        @if($job->job_status === 1)
        <form action="{{ url('ClientRequestDone') }}" method="GET">
            <input type="hidden" name="id" value="{{$job->id}}">
            <input type="submit" value="募集を終了する">
        </form>
        @elseif($job->job_status === 2)
        <form action="{{ url('ClientProjectDone') }}" method="GET">
            <input type="hidden" name="id" value="{{$job->id}}">
            <input type="submit" value="案件を終了する">
        </form>
        @elseif($job->job_status === 3)
        <!-- <form action="{{ url('ClientAssessmentDone') }}" method="GET"> -->
        <form action="{{ url('/clients/player/assessment') }}" method="GET">
            <input type="hidden" name="id" value="{{$job->id}}">
            <input type="submit" value="評価する">
        </form>
        @elseif($job->job_status === 4)
            <div class="job_btn_done">
                <p>案件終了済み</p>
            </div>
        @endif
    </div>


</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->
@include('layouts/sp_menu_client')
@endsection