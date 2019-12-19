<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->



@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/users/issues/index.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <h1>案件詳細</h1>
    <div>
        <!-- 現在の案件　表記例 -->
        <table class="">
            <!-- テーブル本体 -->
            <tbody>
                <tr class="">   
                <td class="">
                    <div>公募タイトル</div>
                </td>
                <td class="">
                    <div>$job->job_title</div>
                </td>
                </tr>
                <tr class="">
                <td class="">
                    <div>相談したいこと</div>
                </td>
                <td class="">
                    <div>$job->consultation</div>
                </td>
                </tr>
                <tr class="">
                <td class="">
                    <div>提案時にご記載いただきたいこと</div>
                </td>
                <td class="">
                    <div>$job->request_fill_out</div>
                </td>
                <tr class="">
                <td class="">
                    <div>相談の形式</div>
                </td>
                <td class="">
                    <div>$job->work_format</div>
                </td>
                </tr>
                <tr class="">
                <td class="">
                    <div>プロジェクト期間</div>
                </td>
                <td class="">
                    <div>$job->work_term</div>
                </td>
                </tr>
                <tr class="">
                <td class="">
                    <div>面談方法</div>
                </td>
                <td class="">
                    <div>$job->interview_format</div>
                </td>
                </tr>
                <tr class="">
                <td class="">
                    <div>面談場所</div>
                </td>
                <td class="">
                    <div>$job->interview_place</div>
                </td>
                </tr>
                <tr class="">
                <td class="">
                    <div>募集人数</div>
                </td>
                <td class="">
                    <div>$job->request_number</div>
                </td>
                </tr>
                <tr class="">
                <td class="">
                    <div>募集期限</div>
                </td>
                <td class="">
                    <div>$job->recruitment_term</div>
                </td>
                </tr>
                <tr><td>
                    <form action="{{url('proposal')}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="job_id" value="{{ $job->id }}">
                <button type="submit" class="btn btn-primary">
                    応募する
                </button>
                </form>
                </td><td></td></tr>
            </tbody>
        </table>
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
