@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/profile1.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->

@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <form action="{{ url('profile2') }}" method="GET" class="form-horizontal">
        <div class="col-sm-6">
            <select type="text" name="user_prefectures" value="{{old('user_prefectures')}}" class="form-control" placeholder="">
                <option value="">（選択）お住まいの都道府県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="茨城県">茨城県</option>
                <option value="大阪府">大阪府</option>
                <option value="愛知県">愛知県</option>
                <option value="兵庫県">兵庫県</option>
                <option value="静岡県">静岡県</option>
                <option value="福岡県">福岡県</option>
                <option value="広島県">広島県</option>
                <option value="北海道">北海道</option>
                <option value="京都府">京都府</option>
                <option value="栃木県">栃木県</option>
                <option value="宮城県">宮城県</option>
                <option value="群馬県">群馬県</option>
                <option value="奈良県">奈良県</option>
                <option value="福島県">福島県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="長野県">長野県</option>
                <option value="新潟県">新潟県</option>
                <option value="三重県">三重県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="大分県">大分県</option>
                <option value="山梨県">山梨県</option>
                <option value="山口県">山口県</option>
                <option value="熊本県">熊本県</option>
                <option value="山形県">山形県</option>
                <option value="秋田県">秋田県</option>
                <option value="青森県">青森県</option>
                <option value="石川県">石川県</option>
                <option value="島根県">島根県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="長崎県">長崎県</option>
                <option value="沖縄県">沖縄県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="香川県">香川県</option>
                <option value="岩手県">岩手県</option>
                <option value="富山県">富山県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="福井県">福井県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="岡山県">岡山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="徳島県">徳島県</option>
                <option value="海外">海外</option>
            </select>
        </div>
        <div class="col-sm-6">
            <select type="text" name="user_exp_business" value="{{old('user_exp_business')}}" class="form-control" placeholder="">
                <option value="">（選択）経験業界</option>
                <option value="IT・通信">IT・通信</option>
                <option value="Web・インターネット">Web・インターネット</option>
                <option value="ゲーム">ゲーム</option>
                <option value="広告・メディア">広告・メディア</option>
                <option value="出版・印刷">出版・印刷</option>
                <option value="人材・教育">人材・教育</option>
                <option value="コンサルティング">コンサルティング</option>
                <option value="ホテル・レジャー">ホテル・レジャー</option>
                <option value="店舗・小売・外食">店舗・小売・外食</option>
                <option value="商社・卸売">商社・卸売</option>
                <option value="鉄道・航空">鉄道・航空</option>
                <option value="運輸・物流">運輸・物流</option>
                <option value="その他サービス">その他サービス</option>
                <option value="食品・飲料">食品・飲料</option>
                <option value="繊維・アパレル">繊維・アパレル</option>
                <option value="化粧品・医薬品">化粧品・医薬品</option>
                <option value="電機・自動車">電機・自動車</option>
                <option value="化学・石油">化学・石油</option>
                <option value="不動産・住宅・建設">不動産・住宅・建設</option>
                <option value="銀行・信金">銀行・信金</option>
                <option value="クレジットカード">クレジットカード</option>
                <option value="証券">証券</option>
                <option value="保険">保険</option>
                <option value="インフラ">インフラ</option>
                <option value="農林・水産">農林・水産</option>
                <option value="官公庁">官公庁</option>
            </select>
        </div>
        <div class="col-sm-6">
            <select type="text" name="user_exp_job" value="{{old('user_exp_job')}}" class="form-control" placeholder="">
                <option value="">（選択）経験職種</option>
                <option value="社長・役員">社長・役員（CXO）</option>
                <option value="営業（個人/法人）">営業（個人/法人）</option>
                <option value="企画（経営/事業/商品）">企画（経営/事業/商品）</option>
                <option value="広告・マーケティング">広告・マーケティング</option>
                <option value="広報・PR">広報・PR</option>
                <option value="人事">人事</option>
                <option value="総務">総務</option>
                <option value="経理・財務">経理・財務</option>
                <option value="法務・知財">法務・知財</option>
                <option value="事務・アシスタント">事務・アシスタント</option>
                <option value="販売/サービス系">販売/サービス系</option>
                <option value="ITエンジニア">ITエンジニア（SE/PG）</option>
                <option value="ITエンジニア">ITコンサルタント/PM</option>
                <option value="社内SE">社内SE</option>
                <option value="Webデザイナー">Webデザイナー</option>
                <option value="コンサルタント/リサーチャー">経営コンサルタント/リサーチャー</option>
                <option value="技術（電気/電子/機械/自動車）">技術（電気/電子/機械/自動車）</option>
                <option value="公務員">公務員</option>
                <option value="その他">その他</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="user_phone" value="{{old('user_phone')}}" class="form-control" placeholder="電話番号">
        </div> 
        <div class="form-group col-md-6">
            <input type="text" name="user_exp_company" value="{{old('user_exp_company')}}" class="form-control" placeholder="直近の会社名">
        </div> 
        <div class="form-group col-md-6">
            <input type="text" name="user_exp_department" value="{{old('user_exp_department')}}" class="form-control" placeholder="部署名">
        </div> 
        <div class="form-group col-md-6">
            <input type="text" name="user_exp_position" value="{{old('user_exp_position')}}" class="form-control" placeholder="役職">
        </div> 
        <div class="form-group col-md-6">
            <!-- <select name="user_exp_start" class="user_exp_start">
                <option value="">--選択--</option>
            </select> -->
            <input type="text" name="user_exp_start" value="{{old('user_exp_start')}}" class="form-control" placeholder="期間年・期間月から">
        </div> 
        <div class="form-group col-md-6">
            <input type="text" name="user_exp_end" value="{{old('user_exp_end')}}" class="form-control" placeholder="期間年・期間月まで">
        </div> 
        <div class="form-group col-md-6">

            <input type="radio" name="user_current" value="在職">在職
            <input type="radio" name="user_current" value="離職">離職
            <!-- <input id="user_current1" type="radio" name="sei" value="在職"><label for="user_current1" class="label">在職</label>
            <input id="user_current2" type="radio" name="sei" value="離職"><label for="user_current2" class="label">離職</label> -->

        </div> 
    </div>

        <div class="form-row">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">保存</button>
            </div>
        </div>
    </form>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/profile1.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
