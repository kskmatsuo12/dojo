<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'dojo') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
</head>
<style>
body{
    font-family: 'M PLUS 1p', sans-serif;
}
.top{
    background-image: url("/images/top.jpeg");
    position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
}

.top::before{
    background-color: rgba(0,0,0,0.3);
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    content: ' ';
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
}

.logo{
    width:100px;
}

.navbar-default {
    background-color: #fff;
    border-color: #d3e0e9;
    box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.form-horizontal{
    margin: 0 auto;
}

.col-sm-6{
    margin: 0px 0px 25px;
}

#top_title{
    font-size:20px;
    font-weight: bold;
    color:#43c4cf;
    letter-spacing: 2px;
    margin-bottom: 30px;
    text-align: center;
}

#top_title p{
    margin: 0;
}

#top_body {
    width: 36%;
    padding: 15px 30px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 5px 5px 5px rgba(26, 43, 46, 0.6);
    position: absolute;
    top: 54%;
    left: 74%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.col-sm button{
    font-size:16px;
    width: 80%;
    height: 60px;
    background: lightgray;
    border: none;
    letter-spacing: 2px;
    text-align: center;
    margin: 10px auto 0;
    justify-content: center;
    display: flex;
}

/* .button_hover:hover{
    border: #43c4cf;
    background: #43c4cf;
} */

.sm{
    height: 100%;
    padding:0 15px;
    margin: 25px 0;
}

.copy h1{
    font-size: 45px;
    font-weight: bold;
    color:#fff;
    position: absolute;
    top: 30%;
    left: 26%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.copy h2{
    font-size: 22px;
    font-weight: bold;
    color:#fff;
    position: absolute;
    top: 40%;
    left: 26%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}


#button2 {
    display: none;
    border: #43c4cf;
    background: #43c4cf;
   }

.nav li a {
        border: 1px solid lightgray;
        line-height: 0px;
        padding: 11px;
        height: 20px;
        border-radius: 7px;
        margin: 12px;
        vertical-align: middle;
        color:lightgray;
}

.nav li a:hover {
    background-color: lightgray;
}

.nav li p:hover {
        background-color: lightgray;
}

@media screen and (max-width:767px) { 

    .copy h1{
    font-size: 35px;
    font-weight: bold;
    color:#fff;
    text-align: center;
    position: absolute;
    width: 90%;
    top: 12%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    }

    .copy h2{
    font-size: 16px;
    font-weight: bold;
    color:#fff;
    width: 90%;
    text-align: center;
    position: absolute;
    top: 17%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    }

    #top_body{
    width:70%;
    padding: 30px;
    background: #fff;
    border: 1px solid #43c4cf;
    border-radius: 5px;
    box-shadow:5px 5px 5px rgba(26, 43, 46, 0.6);
    position: absolute;
    top: 58%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    }

    .col-sm-6{
    margin: 0px 0px 15px;
    }

    .sm{
        height: 100%;
        padding:0 15px;
        margin: 15px 0;
    }

    .form-group {
        margin:0px;
    }

}

</style>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="brand" href="{{ url('/') }}">
                     <img alt="logo" class="logo" src="{{ asset('/images/dojo.png') }}"> 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">個人ユーザーのログイン</a></li>
                            <li><a href="{{ url('/clients/register_form') }}">法人ユーザーの新規登録</a></li>
                            <li><a href="{{ url('/clients/login_form') }}">法人ユーザーのログイン</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            ログアウト
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">

    <!-- Bootstrapの定形コード… -->
        <div class="top">
            <div class="copy">
                <h1>新時代の学び体験</h1>
                <h2>人と組織の変わりたいを応援する</h2>
            </div>
            <div class="card-body" id="top_body">
                
                <div class="card-title" id="top_title">
                    <p>基本情報</p>
                </div>
                
                <!-- バリデーションエラーの表示に使用-->
                @include('common.errors')
                <!-- バリデーションエラーの表示に使用-->

                <form method="POST" action="{{ route('register') }}" class="form-horizontal">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <div class="col-sm-6">
                            <!-- <label for="user_name_sei" class="">姓</label> -->

                            <input type="text" name="name" value="{{old('user_name_sei')}}" class="form-control" id="top_form1" placeholder="姓" required>
                        </div>
                        <div class="col-sm-6">
                        <!-- <label for="user_name_mei" class="">名</label> -->
                            <input type="text" name="user_name_mei" value="{{old('user_hurigana_sei')}}" class="form-control" id="top_form2" placeholder="名" required>
                        </div>
                        <div class="col-sm-6">
                            <!-- <label for="user_hurigana_sei" class="">セイ</label> -->
                            <input type="text" name="user_hurigana_sei" value="{{old('user_hurigana_sei')}}" class="form-control" id="top_form3" placeholder="セイ" required>
                        </div>
                        <div class="col-sm-6">
                            <!-- <label for="user_hurigana_mei" class="">メイ</label> -->
                            <input type="text" name="user_hurigana_mei" value="{{old('user_hurigana_mei')}}" class="form-control" id="top_form4" placeholder="メイ" required>
                        </div>
                        <div class="sm">
                            <!-- <label for="email" class="">メールアドレス</label> -->
                            <input type="text" name="email" value="{{old('email')}}" class="form-control" id="top_form5" placeholder="メールアドレス" required>
                        </div>
                        <div class="sm">
                            <!-- <label for="password" class="">パスワード設定</label> -->
                            <input type="password" name="password" value="{{old('password')}}" class="form-control" id="top_form6" placeholder="パスワード(6文字以上)" required>
                        </div>
                        <div class="sm">
                            <!-- <label for="password" class="">パスワード設定</label> -->
                            <input type="password" name="password_confirmation" class="form-control" id="top_form7" placeholder="パスワード(6文字以上)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <button id="button1">会員登録（無料）</button>
                            <button id="button2" type="submit" class="button_hover btn btn-primary">
                                会員登録（無料）
                            </button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>


    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/welcome.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
