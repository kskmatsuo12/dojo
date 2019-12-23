@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->
<style>
    body{
        background:#f2feff;
        font-size:13px;
    }

    .user_table{
        width: 80%;
        margin: 0 auto;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .user_table th{
        padding: 15px;
        border-top: 1px solid black;
        border-bottom: 1px solid black;

    }

    .user_table td{
        padding: 15px;
        border-top: 1px solid black;
        border-bottom: 1px solid black;    
        vertical-align: middle;
        text-align: center;

    }
    input{
        display: flex;
        justify-content: center;
        height: 35px;
        font-size: 12px;
        outline: none;
        resize: none;
        padding:5px;
        margin: 0px auto;
        border-radius: 5px;
        border: 1px solid #fff;
        width: 100%;
    }

    input[type=radio] {
        display: none;
    }

    textarea{
        height:130px;
        padding:5px;
        border-radius: 5px;
        margin: 0px auto;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
        width: 100%;
    }

    button{
        display: flex;
        justify-content: center;
        width: 200px;
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

  

    @media screen and (min-width: 781px) {

  
    }

    @media screen and (min-width: 1040px) {
    .container {
        width: 1040px;
        margin: auto;
    }
    }

</style>
@section('content')
<div class="container">
    <!-- この中にコンテンツ -->


    <form action="{{ url('UserAssessmentDone') }}" method="GET">

    <table class="user_table">
    <tr>
        <th>クライアント名</th>
        <th>評価</th>
        <th>コメント</th>
    </tr>
        <tr>
            <td>{{$client->client_name}}</td>
            <td>
                <select type="text" name="client_level" class="form-control" placeholder="">
                    <option value="">（選択）</option>
                    <option value="15">またお願いしたい</option>
                    <option value="10">貢献度大</option>
                    <option value="5">感謝</option>
                </select>
            </td>
            <td>
            <textarea type="text" name="client_worrying" placeholder="ご記載いただいた内容は参加者に届けられます。参加者の成長につながるようなコメントや感謝のコメントをご記入いただきたいと思います。"></textarea>
            </td>
            <!-- id紐づけ -->
        </tr>  
    </table>
        <input type="hidden" name="job_id" value="{{$suggestion->job_id}}">
        <input type="hidden" name="client_id" value="{{$suggestion->client_id}}">
        <input type="hidden" name="user_id" value="{{$suggestion->user_id}}">

    <p>全てのvalueが埋まらないと評価完了できないようにする。</p>
    <div class="form-group">
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">
                評価完了
            </button>
        </div>
    </div>

</form>
</div>


<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
