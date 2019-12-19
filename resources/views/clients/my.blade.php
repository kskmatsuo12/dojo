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

<div>公募の作成（公募作成画面に遷移）</div>
    <!-- この中にコンテンツ -->
    現在の案件
    過去の案件一覧
    詳細画面から案件の報告等確認可能
    foreachで持ってくる（jobs）
    クリックしたら案件詳細
    詳細で見られる項目：jobデータ、suggestionデータ
    　現在：過去のここを解像度高く

    <div>
        if (count($jobs) > 0)
        <!-- クライアント条件での抜出要 -->
        <div class="card-body">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                <th>公募タイトル</th>
                <th>募集期限</th>
                <th>募集の状況</th>
                <th>案件進捗</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                foreach ($jobs as $job)
                クライアントidごと、過去含む
                <!-- いけるか不安 -->
                    <tr>
                    <td class="">
                        <div>$job->job_title</div>
                    </td>
                    <td class="">
                        <div> $job->recruitment_term</div>
                    </td>
                    <td class="">
                        <div> $job->job_status</div>
                    </td>
                    <td class="">
                        <div> $suggestion->progress_info</div>
                    </td>
                    <td class="">
                        <div><a href="">詳細</a></div>
                    </td>
                    <td class="">
                        <div><a href=""> 評価</a></div>
                    </td>
                    </tr>
                endforeach
                </tbody>
            </table>
        </div>

            endif

    </div>



</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
