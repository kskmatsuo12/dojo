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
    <form action="{{ url('candidates') }}" method="POST">
                    {{ csrf_field() }}

                    <div>
                        <div>
                            <!-- <label for="sei" class="">生年月日</label> -->
                            <input type="text" name="user_birthday" value="{{old('sei')}}" placeholder="生年月日">
                        </div>
                        <div>
                        <!-- <label for="mei" class="">最終学歴</label> -->
                            <input type="text" name="user_last_degree" value="{{old('mei')}}" placeholder="最終学歴">
                        </div>
                        <div>
                            <!-- <label for="sei_kana" class="">学校名</label> -->
                            <input type="text" name="user_last_school" value="{{old('sei_kana')}}" placeholder="学校名">
                        </div>
                        <div>
                            <!-- <label for="mei_kana" class="">学部・学科</label> -->
                            <input type="text" name="user_last_school_dept" value="{{old('mei_kana')}}" placeholder="学部・学科">
                        </div>
                        <div">
                            <!-- <label for="email" class="">性別</label> -->
                            <input type="text" name="user_gender" value="{{old('email')}}" placeholder="性別">
                        </div>
                        <div">
                            <!-- <label for="pw" class="">前職の会社名</label> -->
                            <input type="text" name="user_last_company" value="{{old('pw')}}" placeholder="前職の会社名">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">部署名</label> -->
                            <input type="text" name="user_last_company_dept" value="{{old('pw')}}" placeholder="部署名">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">役職</label> -->
                            <input type="text" name="user_last_company_position" value="{{old('pw')}}" placeholder="役職">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">期間年・期間月から</label> -->
                            <input type="text" name="user_last_company_since" value="{{old('pw')}}" placeholder="期間年・期間月から">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">期間年・期間月まで</label> -->
                            <input type="text" name="user_last_company_until" value="{{old('pw')}}" placeholder="期間年・期間月まで">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">簡単な経歴</label> -->
                            <input type="text" name="user_last_company_exp" value="{{old('pw')}}" placeholder="簡単な経歴">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">得意な言語（日本語以外）</label> -->
                            <input type="text" name="user_language" value="{{old('pw')}}" placeholder="得意な言語（日本語以外）">
                        </div>
                        <div>
                            <!-- <label for="pw" class="">資格・免許</label> -->
                            <input type="text" name="user_licence" value="{{old('pw')}}" placeholder="資格・免許">
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
