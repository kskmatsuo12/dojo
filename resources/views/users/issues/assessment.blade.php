@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->
<style>
    body{
        background:#f2feff;
        font-size:13px;
    }


    input{
        display: flex;
        justify-content: center;
        height: 35px;
        font-size: 12px;
        outline: none;
        resize: none;
        padding:5px;
        /* margin: 0px auto; */
        border-radius: 5px;
        border: 1px solid #fff;
    }

    input[type=radio] {
        display: none;
    }

    textarea{
        height: 160px;
        padding: 5px;
        font-size: 12px;
        border-radius: 5px;
        margin: 0px auto;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
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
label{
    display: block;
    float: left;
    width: 65px;
    height: 35px;
    line-height: 35px;
    padding-left: 5px;
    padding-right: 5px;
    margin:10px 5px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid lightgray;
    border-radius: 5px;
    background: #ffffff;
}

label:hover {
    background: gold;
}
input[type="radio"]:checked + label {
    background: gold;
    color: #ffffff; 
    border: 1px solid gold;
}
.medal{
    display: flex;
}
.medal i{
    color:gold;
        font-size:0px;
        padding:2px;
        /* line-height: 44px; */
    }

tr{
    height: 30px;
    margin: 20px auto;
    letter-spacing:1px;
}

th{
    background:rgb(67,196,207,0.3);
    vertical-align: middle;
    height:50px;
    border-bottom: 1px solid rgb(21, 163, 75,0.1);
    padding: 0 15px;
}

td{
    background:white;
    padding:20px 10px;
    vertical-align: middle;
    display: table-cell;
    text-align: center;
    align-items:center;
    border-bottom: 1px solid rgb(67,196,207,0.3);
}
table{
    border: 1px solid rgb(67,196,207,0.5);
    border-radius: 10px;
    border-collapse: separate;
    box-shadow: 0px 1px 3px rgb(82, 147, 151);
    overflow: hidden;
    margin:10px auto;
    width: 85%;
}
.medals{
    padding: 5px;
    display: flex;
    flex-direction: column;
    }

.title_top p{
    font-weight: bold;
    font-size: 18px;
    line-height: 80px;
    border-bottom: 1px solid gray;
    width: 65%;
    display: flex;
    justify-content: center;
    margin: 20px auto;
}
.title_top_job p{
    display: flex;
    justify-content: center;
    margin: 20px auto;

}
    @media screen and (min-width: 781px) {
        .medal i{
        color:gold;
        font-size:22px;
        padding:2px;
        line-height: 44px;
    }
    textarea{
        height: 160px;
        padding: 5px;
        font-size: 12px;
        border-radius: 5px;
        margin: 0px auto;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
        width: 350px;
}
.title_top_job p {
    display: flex;
    justify-content: center;
    margin: 20px auto;
    font-size: 15px;
}
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


    <form action="{{ url('UserAssessmentDone') }}" method="POST">
    {{ csrf_field() }}
    <table class="user_table">
    <tr>
        <th>クライアント名</th>
        <!-- <th>評価</th> -->
        <th>コメント</th>
    </tr>
        <tr>
            <td>{{$client->client_name}}</td>
            <!-- <td>
                <select type="text" name="client_level" class="form-control" placeholder="">
                    <option value="">（選択）</option>
                    <option value="3">とても協力的だった</option>
                    <option value="2">協力的だった</option>
                    <option value="1">あまり協力的ではなかった</option>
                </select>
            </td> -->
            <td>
            <textarea type="text" name="client_worrying" placeholder="ご記載いただいた内容は参加者に届けられます。参加者の成長につながるようなコメントや感謝のコメントをご記入いただきたいと思います。"></textarea>
            </td>
            <!-- id紐づけ -->
        </tr>  
    </table>
        <input type="hidden" name="job_id" value="{{$suggestion->job_id}}">
        <input type="hidden" name="client_id" value="{{$suggestion->client_id}}">
        <input type="hidden" name="user_id" value="{{$suggestion->user_id}}">

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
