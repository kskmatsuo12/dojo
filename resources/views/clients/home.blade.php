<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- controllerができたらifとforeachに@、関数に{{}}を追加 -->
<!-- テーブルがない場合、↓を読み込み -->
<?php
    use App\Job;
    $job = Job::get();
    echo $job;
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
        <h1>現在進捗中</h1>
        <h2>　　</h2>
    </div>
    <div>
    <!-- この中にコンテンツ -->
            @if (count($jobs) > 0)
            <!-- クライアント条件での抜出要 -->
            <div class="card-body">
                <div class="card-body">
                @foreach ($jobs as $job)
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>公募タイトル</th>
                        <th>所用時間</th>
                        <th>担当者名</th>
                        <th>案件進捗</th>
                        <th>案件詳細</th>
                        <th>client_id</th>
                    </thead>
                    <tbody>
                        <td class="table-text">
                            <div>{{$job->job_title}}</div>
                        </td>
                        <td class="table-text">
                            <div> {{$job->work_term}} </div>
                        </td>
                        <td class="table-text">
                            <div> {{$job->responsible_party}} </div>
                        </td>
                        <td class="table-text">
                            <div>＊＊案件進捗状態の表示</div>
                        </td>
                        <td class="table-text">
                            <div><a href="{{ url('clients/my/index/'.$job->id) }}">詳細</a></div>
                        </td>
                        <td class="table-text">
                            <div>{{$job->client_id}} </div>
                        </td>
                    </tbody>
                    <thead>
                    <th colspan="5">相談したいこと</th>
                    </thead>
                    <tbody>
                        <td colspan="5" class="table-text">
                            <div> {{$job->consultation}}</div>
                        </td>
                    </tbody>
                </table>
                @endforeach
                </div>
            </div>
            @endif
        </div>

    </div>

    <div class="line">
        <h1>公募の作成</h1>
        <h2>　　</h2>
    </div>
    <form   action="{{ url('clients/post')}}">
    <button class="">作成する</button>
    </form>
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
