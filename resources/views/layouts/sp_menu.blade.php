<head>
    <link rel="stylesheet" href="{{ asset('css/sp_menu.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>


<div class="sp-menu">
    <div class="sp-menu-item">
        <a class="" href="{{url('/home')}}">
            <i class="fas fa-home"></i>
            <p>ホーム</p>
        </a>
    </div>
    <div class="sp-menu-item">
        <a class="" href="{{url('/issues')}}">
            <i class="fas fa-edit"></i>
            <p>応募する</p>
        </a>
    </div>
    <div class="sp-menu-item">
        <a class="" href="{{url('/messages')}}">
            <i class="far fa-comments"></i>
            <p>メッセージ</p>
        </a>
    </div>
    <div class="sp-menu-item">
        <a class="" href="{{url('/my')}}">
            <i class="fas fa-cog"></i>
            <p>マイページ</p>
        </a>
    </div>
</div>
    