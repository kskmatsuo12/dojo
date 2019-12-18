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
    <!-- この中にコンテンツ -->
    <form action="{{ url('profile2Store') }}" method="POST">
                    {{ csrf_field() }}

                    <div>
                        <div>
                            <!-- <label for="sei" class="">生年月日</label> -->
                            <input type="date" name="user_birthday" value="{{old('user_birthday')}}" placeholder="生年月日">
                        </div>
                        <div>
                        <!-- <label for="mei" class="">最終学歴</label> -->
                            <input type="text" name="user_last_degree" value="{{old('user_last_degree')}}" placeholder="最終学歴">
                        </div>
                        <div>
                            <!-- <label for="sei_kana" class="">学校名</label> -->
                            <input type="text" name="user_last_school" value="{{old('user_last_school')}}" placeholder="学校名">
                        </div>
                        <div>
                            <!-- <label for="mei_kana" class="">学部・学科</label> -->
                            <input type="text" name="user_last_school_dept" value="{{old('user_last_school_dept')}}" placeholder="学部・学科">
                        </div>
                        <div>
                            <!-- <label for="email" class="">性別</label> -->
                            <input type="text" name="user_gender" value="{{old('user_gender')}}" placeholder="性別">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">前職の会社名</label> -->
                            <input type="text" name="user_last_company" value="{{old('user_last_company')}}" placeholder="前職の会社名">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">部署名</label> -->
                            <input type="text" name="user_last_company_dept" value="{{old('user_last_company_dept')}}" placeholder="部署名">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">役職</label> -->
                            <input type="text" name="user_last_company_position" value="{{old('user_last_company_position')}}" placeholder="役職">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">期間年・期間月から</label> -->
                            <input type="date" name="user_last_company_since" value="{{old('user_last_company_since')}}" placeholder="期間年・期間月から">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">期間年・期間月まで</label> -->
                            <input type="date" name="user_last_company_until" value="{{old('user_last_company_until')}}" placeholder="期間年・期間月まで">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">簡単な経歴</label> -->
                            <input type="text" name="user_last_company_exp" value="{{old('user_last_company_exp')}}" placeholder="簡単な経歴">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">得意な言語（日本語以外）</label> -->
                            <input type="text" name="user_language" value="{{old('user_language')}}" placeholder="得意な言語（日本語以外）">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">資格・免許</label> -->
                            <input type="text" name="user_licence" value="{{old('user_licence')}}" placeholder="資格・免許">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm">
                            <button type="submit" class="btn btn-primary">
                                次へすすむ
                            </button>
                        </div>
                    </div>
                    
                </form>






</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/???.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
