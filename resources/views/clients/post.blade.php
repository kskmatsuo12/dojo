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
<div>
    <form action="{{ url('clientsPost') }}" method="GET">
                    {{ csrf_field() }}

    <!-- この中にコンテンツ -->
    <div>
        <!-- <label for="sei" class="">案件のタイトル</label> -->
        <input type="text" name="job_title" value="{{old('job_title')}}" placeholder="プロジェクトタイトル">
    </div>
    <div>
    <!-- <label for="mei" class="">案件の概要</label> -->
        <input type="text" name="job_text" value="{{old('job_text')}}" placeholder="プロジェクト概要">
    </div>
    <div>
    <!-- <label for="mei" class="">案件の概要</label> -->
        <input type="text" name="recruit_advisor" value="{{old('recruit_advisor')}}" placeholder="探しているアドバイザー">
    </div>
    <div>
        <!-- <label for="email" class="">提案時に記載いただきたいこと</label> -->
        <input type="text" name="request_fill_out" value="{{old('request_fill_out')}}" placeholder="提案時に記載いただきたいこと">
    </div>
    <div>
        <!-- <label for="pw" class="">相談の形式</label> -->
        <input type="text" name="work_format" value="{{old('work_format')}}" placeholder="相談の形式">
    </div>
    <div>
        <!-- <label for="pw" class="">相談の期間・時間</label> -->
        <input type="text" name="work_term" value="{{old('work_term')}}" placeholder="相談の期間・時間">
    </div>
    <div>
        <!-- <label for="pw" class="">面談方法</label> -->
        <input type="text" name="interview_format" value="{{old('interview_format')}}" placeholder="面談方法">
    </div>
    <div>
        <!-- <label for="pw" class="">面談場所</label> -->
        <input type="text" name="interview_place" value="{{old('interview_place')}}" placeholder="面談場所">
    </div>
    <div>
        <!-- <label for="pw" class="">募集人数</label> -->
        <input type="text" name="request_number" value="{{old('request_number')}}" placeholder="募集人数">
    </div>
    <div>
        <!-- <label for="pw" class="">募集期限</label> -->
        <input type="date" name="recruitment_term" value="{{old('recruitment_term')}}" placeholder="募集期限">
    </div>
    <div>
        <!-- <label for="pw" class="">担当者名</label> -->
        <input type="text" name="responsible_party" value="{{old('responsible_party')}}" placeholder="担当者名">
    </div>
    <div>
        <!-- <label for="pw" class="">担当者のメールアドレス</label> -->
        <input type="text" name="responsible_email" value="{{old('responsible_email')}}" placeholder="担当者のメールアドレス">
    </div>
    <div>
        <!-- <label for="pw" class="">client_id</label> -->
        <input type="hidden"  name="client_id" value="{{old('client_id')}}" placeholder="client_id">
    </div>

    <div class="form-group">
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">
                案件を投稿する
            </button>
        </div>
    </div>
    </form>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
