<header>
<a href="{{ url('/home')}}">dojo</a>
<a href="{{ url('/profile_view')}}">プロフィール編集</a>
<a href="{{ url('/my') }}">案件管理</a>
<a href="{{ url('/issues') }}">案件一覧</a>
<a href="{{ url('/messages') }}">メッセージ管理</a>
<a href="{{ url('/sitemap') }}">サイトマップ（これはフッター）</a>
<a href="/logout">ログアウト</a>
</header>

<style>
    header{
        display: flex;
    }

</style>