<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<style>
body{
    font-family: 'M PLUS 1p', sans-serif;
    background:#f2feff;
}


.nav-logo img{
    width: 85px;
    padding:0;
    margin:0;
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,0.8);
}

.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(67,196,207);
}


.pjt_post{
    background-color: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 0;
        appearance: none;
        color: rgba(0,0,0,0.8);
}

.pjt_post:hover{
    color: rgba(67,196,207);
}

.dropdown-item{
    font-size:13px;
    height: 40px;
    line-height: 30px;
}

.jumbotron {
    background-color: white;
    box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
}
.jumbotron h1{
    font-size: 30px;
    padding: 20px;
    font-weight: bold;
}

.lead{
    font-size: 20px;
    padding: 10px 20px 30px;
}
.col-lg-4{
    background-color:white;
    border-radius: 2px;
    box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
    margin: 0 15px 15px;
}
.col-lg-4 h2{
    font-size: 18px;
    font-weight: bold;
    padding-top: 20px;
    padding-bottom: 20px;
}
.col-lg-4 i{
    color: rgb(67,196,207);
}
.container {
    width: 100%;
}
.btn-success {
    color: #fff;
    background-color: rgba(67,196,207);
    border-color: rgba(67,196,207);
    box-shadow: 1px 1px 6px rgba(0,0,0,0.2);
}
.btn{
    background: rgb(67,196,207);
    padding:15px;
    color:#ffffff;
    border-color:rgb(67,196,207);
    margin:20px 0px;
}

.btn:hover{
    background: #75d7e0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    color:#ffffff;
    border-color: rgba(67,196,207);
}

.carousel-item h1{
    font-weight: bold;
    font-size:20px;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.9);
}

.carousel-item p{
    text-shadow: 2px 1px 2px rgba(0,0,0,0.4);
}

body{
    background:#f2feff;
    padding-top: 0rem;
    color: #5a5a5a;
    font-family: 'M PLUS 1p', sans-serif;
}

.contains{
    display: flex;
    justify-content: center;
    margin:20px auto;
    width:100%;
}
.contain{
    display:inline-block;
}
.pjts{
    float: left;
    position: relative;
    width:150px;
    text-align: center;
    height:220px;
    margin:20px 10px 30px 10px;
    overflow: hidden;
    box-shadow: 2px 2px 4px rgb(82, 147, 151);
}

.pjts:hover{
    opacity:0.6;
}

.pjt img{
    width:150px;
}

.info{
    position: absolute;
    top: 68%;
    left: 50%;
    width:150px;
    height:150px;
    padding: 10px;
    background: white;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

.pjt_term{
    font-size: 13px;
    color: rgb(67,196,207);
    margin:5px 0 10px;

}
.pjt_title{
    font-size: 13px;
    margin:5px 0 5px;
}
.pjt_name{
    font-size: 10px;
    margin:5px 0 5px;
}

.line{
    padding-top:20px;
}
.line h1{
    padding-top:20px;
    text-align: center;
    height: 60px;
    line-height: 50px;
    font-size: 18px;
    font-weight: bold;
    letter-spacing:1px;
}

.line h2{
    text-align: center;
    background: rgb(67,196,207);
    height: 5px;
    width:50px;
    margin:  20px auto;
    border-radius: 50px;
}

.btn{
    background: rgb(67,196,207);
    box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    padding:10px;
    color:#ffffff;
}


.carousel-item h1{
    font-weight: bold;
}
.carousel-control-next:hover{
    background: rgba(67,196,207, 0.2);
}
.carousel-control-prev:hover{
    background: rgba(67,196,207, 0.2);
}
.link{
    color: #575757;
}

.skill{
    position: absolute;
    background: rgba(67,196,207);
    color: white;
    top: -38%;
    left: 29%;
    font-size: 10px;
    border-radius: 10px;
    padding: 6px;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}


@media screen and (min-width: 781px) {
    .contains{
        display: flex;
        justify-content: center;
        margin:20px auto;
        width:100%
    }
    .pjts{
        float: left;
        position: relative;
        width:255px;
        text-align: center;

        height:220px;
        margin:20px 10px 30px 10px;
        overflow: hidden;
        box-shadow: 2px 2px 4px rgb(82, 147, 151);
    }

    .pjt img{
        width:255px;
    }

    .info{
        position: absolute;
        top: 73%;
        left: 50%;
        width:256px;
        height: 120px;
        padding: 10px;
        background: white;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    .skill {
        position: absolute;
        background: rgba(67,196,207);
        color: white;
        top: -67%;
        left: 21%;
        font-size: 11px;
        border-radius: 10px;
        padding: 7px;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    .col-lg-4{
    background-color:white;
    border-radius: 2px;
    box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
    flex: 0 0 31%;
    max-width: 31%;
    margin: 0 auto;
}
}
@media screen and (min-width: 1040px) {
  .container {
    width: 1040px;
    margin: auto;
    width:90%;
  }

}
.rounded {
    border-radius: .0rem!important; 
}
</style>
<div class="masthead">
    <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav text-md-center nav-justified w-100">
        <li class="nav-item">
            <a class="nav-logo" href="{{url('/clients/home')}}"><img src="{{ url('images/dojo.png')}}" alt=""></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/clients/home')}}">ホーム<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('clients/post')}}"><button class="pjt_post">公募する</button></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/clients/messages')}}">メッセージ管理</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">企業情報の編集</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="{{url('clients/profile')}}">会社概要の編集</a>
            <!-- <a class="dropdown-item" href="#">公募案件の編集</a> -->
            <a class="dropdown-item" href="{{url('/clients/my')}}">公募案件の管理</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>
</div>


<!-- コメントアウトしておく -->
<!-- <div class="header sp_menu">
    <div class="brand_img">
        <a href="/home"><img alt="logo" class="logo" src="{{ asset('/images/dojo.png') }}"></a>
    </div>
    <div>
        <div class="header-icon">
            <a href=""><i class="fas fa-bell"></i></a>
            <a href=""><i class="fas fa-user-circle"></i></a>
        </div>
    </div>
</div>
<div class="header-space"></div> -->