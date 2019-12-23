<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<div class="masthead">
    <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav text-md-center nav-justified w-100">
        <li class="nav-item">
            <a class="nav-logo" href="/clients/home"><img src="{{ url('images/dojo.png')}}" alt=""></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/clients/home">ホーム<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"><form action="{{ url('clients/post')}}"><button class="pjt_post">公募する</button></form></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/clients/messages">メッセージ管理</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">企業情報の編集</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="profile">会社概要の編集</a>
            <!-- <a class="dropdown-item" href="#">公募案件の編集</a> -->
            <a class="dropdown-item" href="my">公募案件の管理</a>
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