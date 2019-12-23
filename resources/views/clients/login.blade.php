@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
</head>
<style>
body{
    color:white;
    margin: 0px auto;
}
.logo{
    width:50%;
    margin: 20px auto 10px;
    padding-right:5px;
    display: flex;
}
.row{
    background: #43c4cf;
    /* display: flex;
    justify-content: center; */
    margin: 0px auto;
    width: 60%;
    border-radius: 10px;
    padding:20px;
}
.panel-heading{
    font-size: 20px;
    padding-top:25px;
    padding-bottom:25px;
    font-weight: bold;
    text-align: center;
}

input{
    border: 1px solid rgb(168, 168, 168);
    resize: none;
    padding:5px;
    height: 35px;
    margin: 12px auto 15px;
    border-radius: 5px;
    width: 200px;
    display: flex;
    justify-content: center;
}
button{
    /* display: flex;
    justify-content: center; */
    width: 150px;
    height: 50px;
    border-radius: 50px;
    background: white;
    font-weight: bold;
    letter-spacing: 3px;
    color: #43c4cf;
    margin: 30px auto 15px;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
}

button:hover{
    box-shadow: none;
    background: #b8d2d4;
    color:#dcf1f3;
}
.col-sm {
    margin: 0px auto;
    display: flex;
    justify-content: center;
}


@media screen and (min-width: 800px) {
    .logo{
        width:20%;
        margin: 20px auto 10px;
        padding-right:5px;
        display: flex;
    }
    .row{
    background: #43c4cf;
    margin: 0px auto;
    width: 26%;
    border-radius: 20px;
    padding:45px;
}
    input {
        font-size:14px;
        border: 1px solid rgb(168, 168, 168);
        resize:  none;
        padding: 5px;
        height: 35px;
        margin: 12px auto 15px;
        border-radius: 5px;
        width: 270px;
        display: flex;
        justify-content: center;
    }
}
</style>
@section('content')
<div class="container">

    <img alt="logo" class="logo" src="{{ asset('/images/dojo.png') }}"> 
    <div class="row">
        <!-- この中にコンテンツ -->
        <div class="panel-heading">ログイン</div>
        @include('common.errors')
        <form action="{{ url('/clients/ClientLogin') }}" method="POST" class="">
        {{ csrf_field() }}
            <div class="form-group">
                <div>
                <label for="email" class="col-md-4 control-label">登録ID</label>
                    <input type="text" name="client_loginid" value="{{old('client_loginid')}}" class="" id="top_form" placeholder="ID" required>
                </div>
                
                <div>
                <label for="email" class="col-md-4 control-label">登録パスワード</label>
                    <input type="text" name="client_pass" value="" class="" id="top_form" placeholder="password" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary">
                    ログイン
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
