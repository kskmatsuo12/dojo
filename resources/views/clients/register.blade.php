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
}
.container {
  width: 100%;
}

.container h1{
    text-align: center;
    margin:50px auto;
    color:rgb(67,196,207);
    font-size: 18px;
    font-weight: bold;
    letter-spacing:1px;
}
.client_form{
    margin-top: 20px;
    margin-bottom: 20px;
}
.client_form label{
    padding-left:60px;

}
.client_form input{
    display: flex;
    justify-content: center;
    margin: 12px auto;
    height: 35px;
    font-size: 15px;
    outline:none;
    resize:  none;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid rgb(168, 168, 168);
    width: 70%;
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
    margin: 50px auto 20px;
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
    .client_form input{
        display: flex;
        justify-content: center;
        margin: 12px auto;
        height: 35px;
        font-size: 15px;
        outline:none;
        resize:  none;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid rgb(168, 168, 168);
        width: 40%;
    }
    .client_form label{
        padding:0px;
        display: flex;
        justify-content: center;
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

    <h1>サービスを使ってみる</h1>
    @include('common.errors')
    <form action="{{ url('clientsRegister') }}" method="POST" class="">
    {{ csrf_field() }}
        <div class="form-group">
            <div class="client_form">
                <label for="client_name" class="client_form_title">貴社名</label>
                <input type="text" name="client_name" value="{{old('client_name')}}" class="form-control" placeholder="例)株式会社Dojo">
            </div>
            <div class="client_form">
                <label for="client_kana" class="client_form_title">貴社名（全角カナ）</label>
                <input type="text" name="client_kana" value="{{old('client_kana')}}" class="form-control" placeholder="例)ドージョー">
            </div>
            <div class="client_form">
                <label for="client_id" class="client_form_title">ID設定</label>
                <input type="text" name="client_loginid" value="{{old('client_id')}}" class="form-control" placeholder="半角英数字6～12文字">
            </div>
            <div class="client_form">
                <label for="client_pass" class="client_form_title">パスワード設定</label>
                <input type="text" name="client_pass" value="" class="form-control" placeholder="半角英数字6～12文字">
            </div>
            <div class="client_form">
                <label for="client_pass" class="client_form_title">パスワード確認</label>
                <input type="text" name="client_pass_confirm" value="" class="form-control" placeholder="半角英数字6～12文字（確認用）">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">
                会員登録(無料)
                </button>
            </div>
        </div>
    </form>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
