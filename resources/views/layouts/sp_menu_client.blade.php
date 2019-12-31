<head>
    <link rel="stylesheet" href="{{ asset('css/sp_menu.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>


<div class="sp-menu">
    <div class="sp-menu-item">
        <a class="" href="{{url('/clients/home')}}">
            <i class="fas fa-home"></i>
            <p>ホーム</p>
        </a>
    </div>
    <div class="sp-menu-item">
        <a class="" href="{{url('/clients/post')}}">
            <i class="fas fa-edit"></i>
            <p>投稿する</p>
        </a>
    </div>
    <div class="sp-menu-item">
        <a class="" href="{{url('/clients/messages')}}">
            <i class="far fa-comments"></i>
            <p>メッセージ</p>
        </a>
    </div>
    <div class="sp-menu-item">
        <a class="" href="{{url('/clients/my')}}">
            <i class="fas fa-cog"></i>
            <p>マイページ</p>
        </a>
    </div>
</div>
    