@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- CSSファイル指定してください -->
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<!-- CSSファイルの指定をしてください〜 -->
<style>
body{
    background:#f2feff;
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
    width: 250px;
}

textarea{
    font-size: 15px;
    height:100px;
    padding:5px;
    margin: 12px;
    border-radius: 5px;
    border: 1px solid rgb(168, 168, 168);
    outline: none;
    resize: none;
    width:92%;
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
input::placeholder {
    /* color: rgb(204, 204, 204); */
}
button{
    display: flex;
    justify-content: center;
    width: 150px;
    height: 50px;
    border-radius: 50px;
    background: #75d7e0;
    font-size: 16px;
    font-weight: bold;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto 20px;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
}
button:hover{
    box-shadow: none;
    background: #43c4cf;
}
.req{
    font-size: 10px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    height: 12px;
    border-radius: 4px;
}
.opt{
    font-size: 10px;
    color:white;
    background:gray;
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
    width:60%;
}

.container{
    margin: 50px auto;
    display: flex;
    justify-content: center;
}

/* 追加しましたユーザープロフィール画像関係 */

.user_profile_preview {
    height: 70px;
    width: 70px;
    vertical-align: middle;
    border-radius: 35px;
    border: solid 1px #ddd;
}

/* 追加したユーザープロフィール画像関係ここまで */

@media screen and (max-width:800px) { 
    table {
        width:90%;
        font-size: 14px;
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

    label{
        font-size:13px;
        margin:0 10px 0 0;
        height: 30px;
        line-height: 30px;
    }
    form{
        margin: 0 auto;

    }

    .user_profile_preview {
    height: 50px;
    width: 50px;
    vertical-align: middle;
    border-radius: 25px;
    margin: auto;
    text-align: center;
    }

    .preview_center {
        text-align: center;
    }

}
</style>

<!-- CSSファイルの指定をしてください〜 -->
@section('content')
<div class="container">
    <!-- この中にコンテンツ -->
    <form action="{{ url('profile2Store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    <table>
        <tr>
            <th>プロフィール画像<span class="opt">任意</span></th>
            <td class="preview_center"><input id="user_profile" type="file" name="image_url" value=""><img id="user_profile_preview" class="user_profile_preview" src="/images/top.jpeg"></td>
        </tr>
        <tr>
            <th>前職の会社名<span class="opt">任意</span></th>
            <td><input type="text" name="user_last_company" value="{{old('user_last_company')}}" placeholder="前職の会社名"></td>
        </tr>

        <tr>
            <th>前職の部署名<span class="opt">任意</span></th>
            <td><input type="text" name="user_last_company_dept" value="{{old('user_last_company_dept')}}" placeholder="前職の部署名"></td>
        </tr>

        <tr>
            <th>前職の役職<span class="opt">任意</span></th>
            <td><input type="text" name="user_last_company_position" value="{{old('user_last_company_position')}}" placeholder="前職の役職"></td>
        </tr>

        <tr>
            <th>前職の就業(開始)<span class="opt">任意</span></th>
            <td><input type="date" name="user_last_company_since" value="{{old('user_last_company_since')}}" placeholder="期間年・期間月から"></td>
        </tr>
        
        <tr>
            <th>前職の就業(終了)<span class="opt">任意</span></th>
            <td><input type="date" name="user_last_company_until" value="{{old('user_last_company_until')}}" placeholder="期間年・期間月まで"></td>
        </tr>

        <tr>
            <th>生年月日<span class="opt">任意</span></th>
            <td><input type="date" name="user_birthday" value="{{old('user_birthday')}}" placeholder="生年月日"></td>
        </tr>

        <tr>
            <th>最終学歴<span class="opt">任意</span></th>
            <td><input type="text" name="user_last_degree" value="{{old('user_last_degree')}}" placeholder="最終学歴"></td>
        </tr>

        <tr>
            <th>学校名<span class="opt">任意</span></th>
            <td><input type="text" name="user_last_school" value="{{old('user_last_school')}}" placeholder="学校名"></td>
        </tr>

        <tr>
            <th>学部・学科<span class="opt">任意</span></th>
            <td><input type="text" name="user_last_school_dept" value="{{old('user_last_school_dept')}}" placeholder="学部・学科"></td>
        </tr>

        <tr>
            <th>性別<span class="opt">任意</span></th>
            <td>
                <input id="user_gender1" type="radio" name="user_gender" value="男性"><label for="user_gender1" class="label">男性</label>
                <input id="user_gender2" type="radio" name="user_gender" value="女性"><label for="user_gender2" class="label">女性</label>
            </td>
        </tr>

        <tr>
            <th>言語(日本語以外)<span class="opt">任意</span></th>
            <td><input type="text" name="user_language" value="{{old('user_language')}}" placeholder="得意な言語（日本語以外）"></td>
        </tr>

        <tr>
            <th>資格・免許<span class="opt">任意</span></th>
            <td><input type="text" name="user_licence" value="{{old('user_licence')}}" placeholder="資格・免許"></td>
        </tr>

        <tr>
            <th>簡単な経歴<span class="opt">任意</span></th>
            <td><textarea name="user_last_company_exp" value="{{old('user_last_company_exp')}}" placeholder="例) 自社が運営するWebサービスのデジタルマーケティングを行ってきました。（SEO/SEMの企画からSNSの運用まで）"></textarea></td>
        </tr>

        </table>
    <button type="submit" class="">次へ　＞</button>
</form>   

</div>

<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/profile2.js') }}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
