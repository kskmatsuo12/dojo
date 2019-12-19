<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->
<?php
$jobs=[];

$suggestions=[];

?>
@include('layouts/header')


@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    <!-- CSSファイル指定してください -->

    <link rel="stylesheet" href="{{ asset('css/users/home.css') }}">

    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->
@section('content')

<div class="container">
    <!-- この中にコンテンツ -->
    <p>memo 項目　募集中案件の状況</p>

    <!-- <h1>aaa</h1> -->
    <div>
        <div><h1>現在進捗中の案件</h1></div>

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
                        <div>進捗状況</div>
                    </td>
                    <td class="">
                        <div>{{$suggestion->progress_info}}</div>
                    </td>
                    </tr>
                </tbody>
            </table>
            @endforeach
                </div>
            </div>
            @endif
        </div>
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
                        <div>募集期限</div>
                    </td>
                    <td class="">
                        <div>$job->recruitment_term</div>
                    </td>
                    </tr>
                    <tr class="">
                    <td class="">
                        <div>進捗状況</div>
                    </td>
                    <td class="">
                        <div>$suggestion->progress_info</div>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div>
        <!-- 新着案件　表記例 -->
        <div><h1>新着案件</h1></div>
        <div>
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
                        <div>募集期限</div>
                    </td>
                    <td class="">
                        <div>$job->recruitment_term</div>
                    </td>
                    </tr>
                    <tr class="">
                    <td class="">
                        <div><a href="">確認:案件idもって案件詳細へ</a></div>
                    </td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div>
        <div><h1>あなたへのおすすめ</h1></div>
        <div>        <div>
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
                        <div>募集期限</div>
                    </td>
                    <td class="">
                        <div>$job->recruitment_term</div>
                    </td>
                    </tr>
                    <tr class="">
                    <td class="">
                        <div><a href="">確認:案件idもって案件詳細へ</a></div>
                    </td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div></div>
    </div>
</div>
@include('layouts/sp_menu')

<!-- JSファイルの指定してください！ -->
<!-- <script src="{{ asset('js/???.js') }}"></script> -->
<!-- JSファイルの指定してください！ -->

@endsection
