@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>
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
    margin: 0px auto;
    border-radius: 5px;
    border: 1px solid rgb(168, 168, 168);
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

label{
    display: inline-block;
    width: 40%;
    /* float: left; */
    line-height: 30px;
    padding-left: 5px;
    padding-right: 5px;
    font-size: 12px;
    margin:5px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid rgba(128, 128, 128, 0.473);
    border-radius: 5px;
    background: #ffffff;
}
label:hover {
    background: #75d7e0;
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

.req{
    font-size: 10px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:4px;
    height: 12px;
    border-radius: 4px;
}
.opt{
    font-size: 10px;
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

@media screen and (min-width: 781px) {
    .wraps{
        width: 40%;
    }
    .wrap{
        margin-bottom:30px;
    }
    body,label{
        font-size:15px;
    }
    input{
        display: flex;
        justify-content: center;
        height: 40px;
        font-size: 15px;
        outline: none;
        resize: none;
        padding:5px;
        margin: 0px auto;
        border-radius: 5px;
        border: 1px solid rgb(168, 168, 168);
        width: 100%;
    }

    textarea{
        font-size: 15px;
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
        <h1>プロジェクトの依頼</h1>
        <h2>　　</h2>
    </div>

<form action="{{ url('clientsPost') }}" method="GET">
                    {{ csrf_field() }}

    <div class="wraps">
        <!-- この中にコンテンツ -->
        <div class="wrap">
            <p class="title">プロジェクトタイトル<span class="req">必須</span></p>
            <input type="text" name="job_title" value="{{old('job_title')}}" placeholder="例）弊社の新規事業を一緒に考えませんか？">
        </div>

        <div class="wrap">
            <p class="title">プロジェクト概要<span class="req">必須</span></p>
            <textarea type="text" name="job_text" value="{{old('job_text')}}" placeholder="例）この度○○領域で新しく事業を検討しています。弊社の次世代のビジネスを担う新規事業案について、一緒にディスカッションしませんか。"></textarea>
        </div>

        <div class="wrap">
            <p class="title">相談したいこと<span class="req">必須</span></p>
            <input id="recruit_advisor1" type="radio" name="recruit_advisor" value="経営企画立案" ><label for="recruit_advisor1" class="label">経営企画立案</label>
            <input id="recruit_advisor2" type="radio" name="recruit_advisor" value="新規事業企画" ><label for="recruit_advisor2" class="label">新規事業企画</label>
            <input id="recruit_advisor3" type="radio" name="recruit_advisor" value="商品開発" ><label for="recruit_advisor3" class="label">商品開発</label>
            <input id="recruit_advisor4" type="radio" name="recruit_advisor" value="営業企画" ><label for="recruit_advisor4" class="label">営業企画</label>
            <input id="recruit_advisor5" type="radio" name="recruit_advisor" value="人事・組織開発" ><label for="recruit_advisor5" class="label">人事・組織開発</label>
            <input id="recruit_advisor6" type="radio" name="recruit_advisor" value="ITシステム" ><label for="recruit_advisor6" class="label">ITシステム</label>
            <input id="recruit_advisor7" type="radio" name="recruit_advisor" value="マーケティング" ><label for="recruit_advisor7" class="label">マーケティング</label>
            <input id="recruit_advisor8" type="radio" name="recruit_advisor" value="広報・PR" ><label for="recruit_advisor8" class="label">広報・PR</label>
            <input id="recruit_advisor9" type="radio" name="recruit_advisor" value="宣伝・広告" ><label for="recruit_advisor9" class="label">宣伝・広告</label>
            <input id="recruit_advisor10" type="radio" name="recruit_advisor" value="販売促進" ><label for="recruit_advisor10" class="label">販売促進</label>
            <input id="recruit_advisor11" type="radio" name="recruit_advisor" value="海外事業" ><label for="recruit_advisor11" class="label">海外事業</label>
            <input id="recruit_advisor12" type="radio" name="recruit_advisor" value="資金調達" ><label for="recruit_advisor12" class="label">資金調達</label>
            <input id="recruit_advisor13" type="radio" name="recruit_advisor" value="経理" ><label for="recruit_advisor13" class="label">経理</label>
        </div>

        <div class="wrap">
            <p class="title">提案時に記載いただきたいこと<span class="req">必須</span></p>
            <textarea type="text" name="request_fill_out" value="{{old('request_fill_out')}}" placeholder="例）案件に該当するご経歴（会社・部署・役職・期間など）、具体的な経験について"></textarea>
        </div>
        <div class="wrap">
            <p class="title">相談の形式<span class="req">必須</span></p>
            <input type="text" name="work_format" value="{{old('work_format')}}" placeholder="例）web会議、対面、電話など">
        </div>
        <div class="wrap">
            <p class="title">時間・期間<span class="req">必須</span></p>
            <input type="text" name="work_term" value="{{old('work_term')}}" placeholder="例）1ヶ月に一度のMTG（1H）、計3ヶ月間">
        </div>
        <div class="wrap">
            <p class="title">面談場所<span class="req">必須</span></p>
            <input type="text" name="interview_place" value="{{old('interview_place')}}" placeholder="例）東京もしくは、弊社オフィス">
        </div>
        <div class="wrap">
            <p class="title">募集人数<span class="opt">任意</span></p>
            <input type="text" name="request_number" value="{{old('request_number')}}" placeholder="募集人数">
        </div>
        <div class="wrap">
            <p class="title">募集期限<span class="opt">任意</span></p>
            <input type="date" name="recruitment_term" value="{{old('recruitment_term')}}" placeholder="募集期限">
        </div>
        <div class="wrap">
            <p class="title">担当者名<span class="req">必須</span></p>
            <input type="text" name="responsible_party" value="{{old('responsible_party')}}" placeholder="担当者名">
        </div>
        <div class="wrap">
            <p class="title">担当者のメールアドレス<span class="req">必須</span></p>
            <input type="text" name="responsible_email" value="{{old('responsible_email')}}" placeholder="担当者のメールアドレス">
        </div>
        <!-- <div class="wrap">
            <p class="title">面談場所<span class="req">必須</span></p>
            <input type="hidden"  name="client_id" value="{{old('client_id')}}" placeholder="client_id">
        </div> -->

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
<script>
</script>
@endsection
