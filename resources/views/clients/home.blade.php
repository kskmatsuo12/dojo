<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->



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
    <p>memo 項目　募集中案件の状況</p>
    <div>
        <div>案件一覧</div>
        <div>公募案件の表示</div>
        <div>foreachでもってくる案件一覧</div>
        <div>表示項目　公募タイトル、相談したいこと、所用時間、担当者名　テーブルで作成</div>
        <div>
        <!-- 現在の案件 -->
            @if (count($jobs) > 0)
            <!-- クライアント条件での抜出要 -->
            <div class="card-body">
                <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                    <th>公募タイトル</th>
                    <th>相談したいこと</th>
                    <th>所用時間</th>
                    <th>担当者名</th>
                    <th>案件進捗</th>
                    <!-- <th>&nbsp;</th> -->
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                    @foreach ($jobs as $job)
                    <!-- いけるか不安 -->
                        <tr>
                        <td class="table-text">
                            <div>job_title</div>
                            <!-- <div>{{ $job->job_title }}</div> -->
                        </td>
                        <td class="table-text">
                            <div>{{ $job->consultation }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $job->work_term }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $job->responsible_party }}</div>
                        </td>
                        <td class="table-text">
                            <div>＊＊案件進捗状態の表示</div>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>

            @endif
        </div>

    </div>

    <div>公募の作成（公募作成画面に遷移）</div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
