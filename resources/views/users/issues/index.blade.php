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
@include('layouts/header')
<div class="container">
    <!-- この中にコンテンツ -->
    @if($did)
    <p class="red">応募済みのプロジェクトです</p>
    @endif
    <h1>プロジェクト詳細</h1>
    <div class="issues_index1">
        <!-- 現在の案件　表記例 -->
        
        <!-- タイトル -->
        <div class="section1">
            <h2>{{$job->job_title}}</h2>
        </div>
        
        <!-- 探している人のカテゴリー -->
        <div class="section2">
            <h3><span>探している人: </span>{{$job->recruit_advisor}}</h3>
        </div>
        <div class="issues_img">
            <img alt="プロジェクト画像" class="issues_image" src="{{asset('/images/issuesindex.jpg')}}">
        </div>
        <div class="section3">
            <div class="section3-left"><span>募集期間:</span>{{$job->recruitment_term}}</div>
            <div class="section3-right"><span>募集人数:</span>{{$job->request_number}}人</div> 
        </div>
        
        <div class="section4">
            <div class="section4-left"><span>面談方法:</span>{{$job->interview_format}}</div>
            <div class="section4-right"><span>面談場所:</span>{{$job->interview_place}}</div>
        </div>
    </div>
    <div class="section5">
        
    </div>
    <div class="issues_index2">
        <div class="section6">
            <span><i class="fas fa-comments"></i>プロジェクトの概要</span>
            <p>{{$job->job_text}}</p>
        </div>
        <div class="section7">
            <span><i class="fas fa-comments"></i>提案時にご記載いただきたいこと</span>
            <p>{{$job->request_fill_out}}</p>
        </div>
            
          <div class="section8">
            <div class="section8-left"><span>業務方法:</span> {{$job->work_format}}</div>
            <div class="section8-right"><span>業務場所:</span>{{$job->interview_place}}</div>
        </div>
        <div class="section9">
            <div><i class="fas fa-users-cog"></i> プロジェクトから得られるスキル</div>
            <p>{{$job->get_skill}}</p>
        </div>
        <form action="{{url('proposal')}}" method="POST">
                {{ csrf_field() }}
            <input type="hidden" name="job_id" value="{{ $job->id }}">
            @if($did)
            <button disabled class="btn disable_button">
                応募済み
            </button>
            @else
            <button type="submit" class="btn">
                応募する
            </button>
            @endif
        </form>
    </div>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

<!-- ページ読み込み時の注意事項 -->
<!-- データが存在する状態で再度確認 -->
<!-- foreachは要確認 -->
<!-- テーブルがない場合、↓を読み込み -->





<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@include('layouts/sp_menu')

@endsection
