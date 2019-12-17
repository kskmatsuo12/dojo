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
</head>
<style>
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
    margin-bottom: 40px;
    text-align: center;
}

#top_body{
    width: 36%;
    padding: 20px 30px;
    background: #fff;
    border: 1px solid #43c4cf;
    border-radius: 5px;
    box-shadow:5px 5px 5px rgba(26, 43, 46, 0.6);
    position: absolute;
    top: 52%;
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
    margin: 20px auto 0;
    justify-content: center;
    display: flex;
}

.col-sm button:hover{
    border: #43c4cf;
    background: #43c4cf;
}

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
    left: 27%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
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
                            <li><a href="{{ route('login') }}">ぉぎｎ</a></li>
                            <li><a href="{{ route('register') }}">会員登録</a></li>
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
                <h2>スキルで繋ぐ社会貢献型プロジェクト</h2>
            </div>
            <div class="card-body" id="top_body">
                
                <div class="card-title" id="top_title">
                    <p>基本情報</p>
                </div>
                
                <!-- バリデーションエラーの表示に使用-->
                @include('common.errors')
                <!-- バリデーションエラーの表示に使用-->

                <form action="{{ url('candidates') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-sm-6">
                            <!-- <label for="sei" class="">姓</label> -->
                            <input type="text" name="sei" value="{{old('sei')}}" class="form-control" id="top_form" placeholder="姓">
                        </div>
                        <div class="col-sm-6">
                        <!-- <label for="mei" class="">名</label> -->
                            <input type="text" name="mei" value="{{old('mei')}}" class="form-control" id="top_form" placeholder="名">
                        </div>
                        <div class="col-sm-6">
                            <!-- <label for="sei_kana" class="">セイ</label> -->
                            <input type="text" name="sei_kana" value="{{old('sei_kana')}}" class="form-control" id="top_form" placeholder="セイ">
                        </div>
                        <div class="col-sm-6">
                            <!-- <label for="mei_kana" class="">メイ</label> -->
                            <input type="text" name="mei_kana" value="{{old('mei_kana')}}" class="form-control" id="top_form" placeholder="メイ">
                        </div>
                        <div class="sm">
                            <!-- <label for="email" class="">メールアドレス</label> -->
                            <input type="text" name="email" value="{{old('email')}}" class="form-control" id="top_form" placeholder="メールアドレス">
                        </div>
                        <div class="sm">
                            <!-- <label for="pw" class="">パスワード設定</label> -->
                            <input type="text" name="pw" value="{{old('pw')}}" class="form-control" id="top_form" placeholder="パスワード(6文字以上)">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <button type="submit" class="btn btn-primary">
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

</script>
</html>
