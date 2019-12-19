<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->
<?php
$suggestions=[];
?>
@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/users/issues.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <div>
        <div><h1>募集中の案件</h1></div>
        <div>
        <!-- 現在の案件 foreach -->
            @if (count($jobs) > 0)
            <!-- クライアント条件での抜出要 -->
            <div class="">
                <div class="">
                @foreach ($jobs as $job)
                <table class="">
                    <!-- テーブル本体 -->
                    <tbody>
                    <tr class="">   
                    <td class="">
                        <div>公募タイトル</div>
                    </td>
                    <td class="">
                        <div>{{$job->job_title}}</div>
                    </td>
                    </tr>
                    <tr class="">
                    <td class="">
                        <div>相談したいこと</div>
                    </td>
                    <td class="">
                        <div>{{$job->consultation}}</div>
                    </td>
                    </tr>
                    <tr class="">
                    <td class="">
                        <div>募集期限</div>
                    </td>
                    <td class="">
                        <div>{{$job->recruitment_term}}</div>
                    </td>
                    </tr>
                    <tr class="">
                    <td class="">
                        <div>募集人数</div>
                    </td>
                    <td class="">
                        <div>{{$job->request_number}}</div>
                    </td>
                    </tr>
                    <tr><td>
                        
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">
                    詳細を確認する
                    </button>
                    </td><td></td></tr>
                </tbody>
            </table>
            @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
