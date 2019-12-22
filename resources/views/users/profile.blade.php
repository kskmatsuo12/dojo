@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
</head>

<style>
body{
    background:#f2feff;
    font-family: 'M PLUS 1p', sans-serif;
}
.col-sm-6{
    display: flex;
    justify-content: center;
}
.col-sm-6 p{
    line-height: 32px; 
}

.item-title{
    padding:5px;
    margin: 12px;
    font-size: 15px;
}

select,input{
    height: 35px;
    font-size: 15px;
    outline: none;
    resize: none;
    padding:5px;
    margin: 12px;
    border-radius: 5px;
    border: 1px solid rgb(168, 168, 168);
    width: 300px;
}

input[type=radio] {
    display: none;
}

label{
    display: block;
    float: left;
    width: 40px;
    height: 35px;
    line-height: 35px;
    padding-left: 5px;
    padding-right: 5px;
    margin:10px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid rgba(128, 128, 128, 0.473);
    border-radius: 5px;
    background: #ffffff;
}
label:hover {
    background: #75d7e0;
}
input[type="radio"]:checked + label {
    background: #43c4cf;
    color: #ffffff; 
    border: 1px solid rgb(240, 240, 240);
}

button{
    display: flex;
    justify-content: center;
    width: 150px;
    height: 50px;
    border-radius: 50px;
    background: #75d7e0;
    font-size: 15px;
    font-weight: bold;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto 80px;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
    font-family: 'M PLUS 1p', sans-serif;
}
button:hover{
    box-shadow: none;
    background: #43c4cf;
}
span{
    font-size: 8px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    height: 12px;
    border-radius: 4px;
}

tr{
    height: 30px;
    margin: 20px auto;
    letter-spacing:1px;
}

th{
    background:rgb(67,196,207,0.3);
    vertical-align: middle;
    height:50px;
    border-bottom: 1px solid rgb(21, 163, 75,0.1);
    padding: 0 15px;
}

td{
    background:white;
    padding:20px 10px;
    vertical-align: middle;
    display: table-cell;
    text-align:left;
    align-items:center;
    border-bottom: 1px solid rgb(67,196,207,0.3);
}
table{
    margin: 0 auto;
    display: flex;
    justify-content: center;
    border: 1px solid rgb(67,196,207,0.5);
    border-radius: 10px;
    border-collapse: separate;
    box-shadow: 0px 1px 3px rgb(82, 147, 151);
    overflow: hidden;
}

.container{
    margin: 20px auto;
    display: flex;
    justify-content: center;
    /* width: 40%; */
}

.line img {
  width: 60%;
  display: flex;
  margin: 0 auto 20px;
}

@media screen and (max-width:800px) { 
    table {
        width:85%;
        font-size: 11px;
    } 
    tr{
        height: 30px;
        margin: 10px auto;
        letter-spacing:0px;
        }

    th{
        background:rgb(67,196,207,0.3);
        vertical-align: middle;
        border-bottom: 1px solid rgb(21, 163, 75,0.1);
        padding: 0 8px;
    }

    td{
        background:white;
        padding: 10px;
        vertical-align: middle;
        display: table-cell;
        text-align:left;
        align-items:center;
        border-bottom: 1px solid rgb(67,196,207,0.3);
        width:65%;
    }
    select,input{
        height: 30px;
        outline: none;
        resize: none;
        padding:5px;
        margin: 5px;
        border-radius: 5px;
        border: 1px solid rgb(168, 168, 168);
        width: 95%;
    }

    textarea{
        height:130px;
        padding:5px;
        margin: 5px;
        border-radius: 5px;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
        width:92%;
    }
    /* span{
        display: none;
    } */
    label{
        font-size:12px;
        margin:0 10px 0 0;
        height: 30px;
        line-height: 30px;
    }
    form{
        margin: 0 auto;

    }

    .line img {
        width: 90%;
        display: flex;
        margin: 0 auto 10px;
    }
    button{
    font-size: 12px;
    }

}
</style>



<!-- CSSファイルの指定をしてください〜 -->
@section('content')
@include('layouts/header')
<div class="container">
    <!-- この中にコンテンツ -->
    <div class="line">
        <img src="{{ asset('images/pic2.png') }}" alt="">
    </div>

    <form action="{{ url('profile2') }}" method="GET" class="">
    <table>
        <tr>
            <th>都道府県<span>必須</span></th>
            <td>
                <select type="text" name="user_prefectures" value="{{old('user_prefectures')}}" class="form-control" placeholder="">
                    <option value="">（選択）</option>
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
            </td>
        </tr>

        <tr>
            <th>経験業界<span>必須</span></th>
            <td>
                <select type="text" name="user_exp_business" value="{{old('user_exp_business')}}" class="form-control" placeholder="">
                    <option value="">（選択）</option>
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
            </td>
        </tr>

        <tr>
            <th>経験職種<span>必須</span></th>
            <td>
                <select type="text" name="user_exp_job" value="{{old('user_exp_job')}}" class="form-control" placeholder="">
                    <option value="">（選択）</option>
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
            </td>
        </tr>

        <tr>
            <th>電話番号<span>必須</span></th>
            <td>
                <input type="text" name="user_phone" value="{{old('user_phone')}}" class="form-control" placeholder="電話番号">
            </td>
        </tr>

        <tr>
            <th>会社名<span>必須</span></th>
            <td>
                <input type="text" name="user_exp_company" value="{{old('user_exp_company')}}" class="form-control" placeholder="直近の会社名">
            </td>
        </tr>

        <tr>
            <th>部署名<span>必須</span></th>
            <td>
                <input type="text" name="user_exp_department" value="{{old('user_exp_department')}}" class="form-control" placeholder="部署名">
            </td>
        </tr>

        <tr>
            <th>役職名<span>必須</span></th>
            <td>
                <input type="text" name="user_exp_position" value="{{old('user_exp_position')}}" class="form-control" placeholder="役職">
            </td>
        </tr>

        <tr>
            <th>就業(開始)<span>必須</span></th>
            <td>
                <input type="date" name="user_exp_start" value="{{old('user_exp_start')}}" class="form-control" placeholder="期間年・期間月から">
            </td>
        </tr>
        <tr>
            <th>就業(終了)<span>必須</span></th>
            <td>
                <input type="date" name="user_exp_end" value="{{old('user_exp_end')}}" class="form-control" placeholder="期間年・期間月まで">
            </td>
        </tr>

        <tr>
            <th>現在の状況<span>必須</span></th>
            <td>
                <input id="user_current1" type="radio" name="user_current" value="在職"><label for="user_current1" class="">在職</label>
                <input id="user_current2" type="radio" name="user_current" value="離職"><label for="user_current2" class="">離職</label>
            </td>
        </tr>

                


    </table>

    <button type="submit" class="">次へ＞</button>
</form>   

</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/profile.js') }}"></script>
<!-- JSファイルの指定してください！ -->
@include('layouts/sp_menu')
@endsection

