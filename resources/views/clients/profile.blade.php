@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
</head>
<style>
body{
    background:#f2feff;
    font-size:13px;
}
input{
    /* display: flex;
    justify-content: center; */
    height: 35px;
    font-size:13px;
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

#top_form{
    height: 35px;
    font-size:13px;
    outline: none;
    resize: none;
    padding:5px;
    margin: 0px auto;
    border-radius: 5px;
    border: 1px solid rgb(168, 168, 168);
    width: 70px;
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
    font-size:13px;
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
        /* display: flex;
        justify-content: center; */
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
<div class="container">
    <!-- この中にコンテンツ -->
    <div class="line">
        <h1>基本情報の登録</h1>
        <h2>　　</h2>
    </div>

    @include('common.errors')
    <form action="{{ url('clientsProfile') }}" method="POST" class="">
    {{ csrf_field() }}
         <div class="wraps">
            <div class="wrap">
                <p class="title">会社所在地<span class="req">必須</span></p>
                <input type="text" name="client_loc" value="{{old('client_loc')}}" class="form-control" id="" placeholder="東京都港区北青山３丁目５−６">
            </div>
            <div class="wrap">
                <p class="title">貴社ホームページＵＲＬ<span class="req">必須</span></p>
                <input type="text" name="client_url" value="{{old('client_url')}}" class="form-control" id="" placeholder="https://dojo.com">
            </div>
            <div class="wrap">
                <p class="title">事業内容<span class="req">必須</span></p>
                <textarea type="text" name="client_biz" value="{{old('client_biz')}}" class="form-control" id="" placeholder="我々は埼玉県を中心にアミューズメント事業を展開しています。"></textarea>
            </div>
            <div class="wrap">
                <p class="title">従業員数<span class="opt">任意</span></p>
                <input type="number" name="client_num_emp" value="{{old('client_num_emp')}}" class="form-control" id="top_form" placeholder="20"> 名
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">
                修正
                </button>
            </div>
        </div>
    </form>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
