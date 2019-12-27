@extends('layouts.app')
@include('layouts/header_client2')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>
<style>
body{
    background:#f2feff;
    font-size:13px;
    font-family: 'M PLUS 1p', sans-serif;
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
    border: 1px solid rgb(168, 168, 168);
    width: 100%;
    font-family: 'M PLUS 1p', sans-serif;
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
    font-family: 'M PLUS 1p', sans-serif;
}

label{
    display: inline-block;
    width: 40%;
    /* float: left; */
    line-height: 30px;
    padding-left: 5px;
    padding-right: 5px;
    font-size: 10px;
    margin:5px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid rgba(128, 128, 128, 0.473);
    border-radius: 5px;
    background: #ffffff;
}
/* label:hover {
    background: #75d7e0;
} */
.label{
    display: inline-block;
    width: 15%;
    line-height: 30px;
    padding-left: 5px;
    padding-right: 5px;
    font-size: 10px;
    margin:5px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid rgba(128, 128, 128, 0.473);
    border-radius: 5px;
    background: #ffffff;
}

input[type="radio"]:checked + label {
    background: #43c4cf;
    color: #ffffff; 
    border: 1px solid rgb(240, 240, 240);
}
/* .label{
    display: inline-block;
} */
.line h1{
    padding-top:20px;
    text-align: center;
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    font-weight: bold;
    /* color:rgb(67,196,207); */
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

.wraps{
    width: 70%;
    padding: 25px;
    margin: 0 auto;
    border-radius: 10px;
    background:white;
    box-shadow: 0px 1px 3px rgb(82, 147, 151);
}
.wrap{
    margin-bottom:15px;
}

.wrap p{
    padding-left: 5px;
    padding-bottom: 12px;
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
    margin: 30px auto 80px;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
    font-family: 'M PLUS 1p', sans-serif;
}
button:hover{
    box-shadow: none;
    background: #43c4cf;
}

.req{
    font-size: 9px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:4px;
    height: 12px;
    border-radius: 4px;
}
.opt{
    font-size: 9px;
    color:white;
    background:gray;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    height: 12px;
    border-radius: 4px;
}

.adjust{
    height: 10px;
}
.job_profile_preview {
    height: 70px;
    width: 70px;
    margin: 20px;
    vertical-align: middle;
    border-radius: 35px;
    border: solid 1px #ddd;
}

  .preview_center {
        text-align: center;
    }

@media screen and (min-width: 781px) {
    .wraps{
        width: 40%;
    }
    .wrap{
        margin-bottom:30px;
    }
    body,label{
        font-size:14px;
    }
    input{
        display: flex;
        justify-content: center;
        height: 40px;
        font-size: 14px;
        outline: none;
        resize: none;
        padding:5px;
        margin: 0px auto;
        border-radius: 5px;
        border: 1px solid rgb(168, 168, 168);
        width: 100%;
    }

    .label{
        display: inline-block;
        width: 15%;
        line-height: 30px;
        padding-left: 5px;
        padding-right: 5px;
        font-size: 14px;
        margin:5px;
        color: gray;
        text-align: center;
        align-items:center;
        cursor: pointer;
        border: 1px solid rgba(128, 128, 128, 0.473);
        border-radius: 5px;
        background: #ffffff;
    }

    textarea{
        font-size: 14px;
        height:130px;
        padding:5px;
        border-radius: 5px;
        margin: 0px auto;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
        width: 100%;
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
<div>
    <div class="line">
        <h1>入力確認</h1>
        <h2>　　</h2>
    </div>
    <form action="{{ url('clientsPost') }}" method="POST" class="" enctype="multipart/form-data">
<!-- <form action="{{ url('clientsPost') }}" method="POST" class="" enctype="multipart/form-data"> -->
                    {{ csrf_field() }}
    <div class="wraps">
        <!-- この中にコンテンツ -->
        <div class="wrap">
            <p class="title">プロジェクトタイトル<span class="req">必須</span></p>
            <input readonly type="text" name="job_title" value="{{$job_title}}">
        </div>

        <div class="wrap">
            <p class="title">プロジェクト概要<span class="req">必須</span></p>
            <textarea readonly type="text" name="job_text" value="{{$job_text}}">{{$job_text}}</textarea>
        </div>

        <div class="wrap">
            <p class="title">担当者からのメッセージ<span class="req">必須</span></p>
            <textarea readonly type="text" name="request_fill_out" value="{{$request_fill_out}}">{{$request_fill_out}}</textarea>
        </div>

        <div class="wrap_profile">
                <p>画像の登録<span class="req">必須</span></p>
                <td class="preview_center"><input id="job_profile" type="file" name="image_url" value=""><img id="job_profile_preview" class="job_profile_preview" src="/images/top.jpeg"></td>
        </div>

        <div class="wrap">
            <p class="title">相談したいこと<span class="req">必須</span></p>
            <input disabled id="recruit_advisor2" type="radio" name="recruit_advisor" value="新規事業アイデア出し" ><label for="recruit_advisor2">新規事業アイデア出し</label>
            <input disabled id="recruit_advisor1" type="radio" name="recruit_advisor" value="事業計画" ><label for="recruit_advisor1">事業計画</label>
            <input disabled id="recruit_advisor3" type="radio" name="recruit_advisor" value="ユーザーインタビュー" ><label for="recruit_advisor3">ユーザーインタビュー</label>
            <input disabled id="recruit_advisor4" type="radio" name="recruit_advisor" value="営業戦略" ><label for="recruit_advisor4">営業戦略</label>
            <input disabled id="recruit_advisor6" type="radio" name="recruit_advisor" value="システム" ><label for="recruit_advisor6">システム</label>
            <input disabled id="recruit_advisor10" type="radio" name="recruit_advisor" value="UI/UXデザイン" ><label for="recruit_advisor10">UI/UXデザイン</label>
            <input disabled id="recruit_advisor7" type="radio" name="recruit_advisor" value="マーケティング" ><label for="recruit_advisor7">マーケティング</label>
            <input disabled id="recruit_advisor8" type="radio" name="recruit_advisor" value="広報・PR" ><label for="recruit_advisor8">広報・PR</label>
            <input disabled id="recruit_advisor12" type="radio" name="recruit_advisor" value="資金調達" ><label for="recruit_advisor12">資金調達</label>
            <input disabled id="recruit_advisor11" type="radio" name="recruit_advisor" value="海外事業" ><label for="recruit_advisor11">海外事業</label>

        </div>


        <div class="wrap">
            <p class="title">相談の形式<span class="req">必須</span></p>
            <input readonly type="text" name="work_format" value="{{$work_format}}">
        </div>
        <div class="wrap">
            <p class="title">時間（*期間は1ヶ月間となります）<span class="req">必須</span></p>
            <input readonly type="text" name="work_term" value="{{$work_term}}">
        </div>
        <div class="wrap">
            <p class="title">面談場所<span class="req">必須</span></p>
            <input readonly type="text" name="interview_place" value="{{$interview_place}}">
        </div>
        <div class="wrap">
            <p class="title">募集人数<span class="req">必須</span></p>
            <input disabled id="request_number1" type="radio" name="request_number" value="1" ><label for="request_number1" class="label">1名</label>
            <input disabled id="request_number2" type="radio" name="request_number" value="2" ><label for="request_number2" class="label">2名</label>
            <input disabled id="request_number3" type="radio" name="request_number" value="3" ><label for="request_number3" class="label">3名</label>
            <input disabled id="request_number4" type="radio" name="request_number" value="4" ><label for="request_number4" class="label">4名</label>
        </div>
        <div class="wrap">
            <p class="title">募集期限<span class="opt">任意</span></p>
            <input readonly type="date" name="recruitment_term" value="{{$recruitment_term}}">
        </div>
        <div class="wrap">
            <p class="title">担当者名<span class="req">必須</span></p>
            <input readonly type="text" name="responsible_party" value="{{$responsible_party}}">
        </div>
        <div class="wrap">
            <p class="title">当該プロジェクトに貴社社長は参加されますか？<span class="req">必須</span></p>
            <input disabled id="president1" type="radio" name="president" value="社長参加" ><label for="president1">社長が参加する</label>
            <input disabled id="president2" type="radio" name="president" value="社長不参加" ><label for="president2">社長が参加しない</label>


        </div>

        <input type="hidden" name="recruit_advisor" value="{{$recruit_advisor}}" >
        <input type="hidden" name="request_number" value="{{$request_number}}" >
        <input type="hidden" name="president" value="{{$president}}" >
        <input type="hidden" name="client_id" value="{{$client_id}}" >


    </div>

    <div class="form-group">
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">
                案件を投稿する
            </button>
        </div>
    </div>

</form>

</div>



<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('js/profile4.js') }}"></script>
<script>

// $("input").on("click",function() {
//     console.log($(this).val());
// });

//「相談したいこと」のボックスを選択
for(i=1; i<13; i++){
    if ("{{$recruit_advisor}}" === $("#recruit_advisor" + i).val()){
        $("#recruit_advisor" + i).prop('checked', true);
    }else{
        console.log("一致してません");
    }
}

//「参加人数」のボックスを選択
for(i=1; i<5; i++){
    if ("{{$request_number}}" === $("#request_number" + i).val()){
        $("#request_number" + i).prop('checked', true);
    }else{
        console.log("一致してません");
    }
}

//「社長参加」のボックスを選択
for(i=1; i<3; i++){
    if ("{{$president}}" === $("#president" + i).val()){
        $("#president" + i).prop('checked', true);
    }else{
        console.log("一致してません");
    }
}

</script>
@include('layouts/sp_menu_client')
@endsection
