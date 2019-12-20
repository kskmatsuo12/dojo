@extends('layouts.app')
<style>
body{
    background: #43c4cf;
    margin: 0px auto;
}

.logo_white{
    width:50%;
    margin: 20px auto 10px;
    padding-right:5px;
    display: flex;
}
.row{
    background: white;
    display: flex;
    justify-content: center;
    margin: 0px auto;
    width: 72%;
    border-radius: 5px;
}
.panel-heading{
    font-size: 20px;
    padding-top:25px;
    padding-bottom:25px;
    font-weight: bold;
}
.checkbox{
    font-size: 12px;
}
.form-control{
    border: 1px solid rgb(168, 168, 168);
    resize: none;
    padding:5px;
    margin: 12px;
    border-radius: 5px;
    width: 200px;
}
.col-md-6{
    width: 100%;
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
.btn{
    text-decoration: none;
    font-size: 12px;
    display: flex;
    justify-content: center;
}

@media screen and (min-width: 800px) {
    .logo_white{
        width:20%;
        margin: 20px auto 10px;
        padding-right:5px;
        display: flex;
    }
    .row{
        background: white;
        display: flex;
        justify-content: center;
        margin: 12px auto;
        width: 35%;
        border-radius: 5px;
    }
    .form-control{
        border: 1px solid rgb(168, 168, 168);
        resize: none;
        padding:5px;
        margin: 12px;
        border-radius: 5px;
        width: 250px;
    }
}
</style>
@section('content')
<div class="container">
 <img alt="logo_white" class="logo_white" src="{{ asset('/images/dojo-logo-white.png') }}"> 
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">ログイン</div>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">登録メールアドレス</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">パスワード</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="remember">ログイン情報を保存
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                ログイン
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                パスワードを忘れた方はこちら
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
