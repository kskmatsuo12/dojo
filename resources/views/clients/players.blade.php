@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <div>
        <h1>全てのアドバイザー</h1>
    </div>
    <div>
    <table>
        <thead>
            <th>経験業界</th>
            <th>経験職種</th>
            <th>経験期間</th>
            <th>在職状況</th>
            <th>ポイント数</th>
            <th>実績数</th>
            <th>都道府県</th>            
            <th>コンタクト</th>            
        </thead>
            <!-- テーブル本体 -->
        <tbody>
        foreach ($users as $user)
        <tr>
            <td>$user->user_exp_business</td>
            <td>$user->user_exp_job</td>
            <td><span>$user->user_exp_start</span>から<span>$user->user_exp_end</span></td>
            <td>$user->user_current</td>
            <td>$user->user_point</td>
            <td>$user->user_achievement</td>
            <td>$user->user_prefectures</td>
            <td><form action="{ url('???'.$user->id) }" method="POST">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary">
                    詳細
                  </button>
                </form></td>
        </tr>
    </table>

    </div>
    <!-- おすすめユーザー順一覧表示　５ -->
    <!-- ユーザー一覧表示 -->
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
