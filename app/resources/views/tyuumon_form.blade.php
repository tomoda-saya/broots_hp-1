@extends('layouts.app')

@section('content')

@include('header')


<link rel="stylesheet" href="css/tyuumon_form.css">

<div class="wrapper3">
    <div class="tyuumon_form">
        <div class="tyuumon_title">
            <p class="tyuumon_title_part2" id="1">注文フォーム</p>
            <p class="section_title_part3"></p>
        </div>
        <form method="post" action="example.cgi">
            <div class="nomal_navi_1">
                <table>
                    <caption>[基本項目]</caption>
                    <tr>
                        <th scope="row">会社名・個人名</th>
                        <td><input type="text" name="company_name" placeholder="例：株式会社　〇〇"></td>
                        <th scope="row">担当者名</th>
                        <td><input type="text" name="user_name" placeholder="例：山田　太郎"></td>
                    </tr>
                    <tr>
                        <th scope="row">電話番号</th>
                        <td><input type="tell" name="tell_number" placeholder="例：080-××××-××××"></td>
                        <th scope="row">メールアドレス</th>
                        <td><input type="text" name="mail" placeholder="例：×××@gmail.com"></td>
                    </tr>
                    <tr>
                        <th scope="row">住所</th>
                        <td colspan="3"><textarea name="adress" id="#" cols="60" rows="1" placeholder="例：〒×××-××××　愛知県○○市○○丁目○○番地"
                        ></textarea></td>
                    </tr>
                </table>
            </div>
            
            <div class="nomal_navi_2">
                <table>
                    <caption>[HP ヒアリング項目]</caption>
                    <tr>
                        <th scope="row">サイト名</th>
                        <td><input type="text" class="site_name" name="site_name" placeholder="例：株式会社　〇〇"></td>
                        <th scope="row">プラン</th>
                        <td><select>
                            <option value="" hidden>Choose</option>
                            <option value="1">基本プラン</option>
                            <option value="2">販促プラン</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th scope="row">制作目的</th>
                        <td colspan="3"><textarea name="adress" id="#" cols="60" rows="5" placeholder="例：企業情報として活用、
                        リクルート情報を載せたい、
                        企業への問合せ機能を付けたい、"
                        ></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">サイトタイプ</th>
                        <td><select>
                            <option value="" hidden>Choose</option>
                            <option value="1">企業・店舗情報</option>
                            <option value="2">キャンペーン</option>
                            <option value="3">製品・サービス</option>
                            <option value="4">採用</option>
                            <option value="5">ブログ</option>
                            <option value="6">その他</option>
                        </select></td>
                        <th scope="row">→その他</th>
                        <td><input type="text" name="mail"></td>
                    </tr>
                    <tr>
                        <th scope="row">ターゲット層1</th>
                        <td>
                            年齢<select>
                                <option value="" hidden>Choose</option>
                                <option value="1">10代〜20代</option>
                                <option value="2">30代〜40代</option>
                                <option value="3">50代〜60代</option>
                                <option value="4">60代以上</option>
                            </select>
                        </td>
                        <th scope="row">ターゲット層2</th>
                        <td>
                            性別<select>
                                <option value="" hidden>Choose</option>
                                <option value="1">男性</option>
                                <option value="2">女性</option>
                                <option value="3">両方</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">ターゲット層３</th>
                        <td colspan="3"><textarea name="target" id="#" cols="60" rows="1" placeholder="例：会社を経営している方、HPを必要としている方"
                        ></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">準備できる素材</th>
                        <td rows="2">
                        <p>
                        <input type="checkbox" name="q1" value="その1"> ロゴデータ
                        <input type="checkbox" name="q1" value="その2"> 写真データ<br>
                        <input type="checkbox" name="q1" value="その3"> 原稿
                        <input type="checkbox" name="q1" value="その4"> 必要な各種資料<br>
                        <input type="checkbox" name="q1" value="その5"> その他
                        </p></td>
                        <th scope="row">→その他</th>
                        <td><input type="text" name="mail"></td>
                    </tr>
                    <tr>
                        <th scope="row">サイトイメージ</th>
                        <td><select>
                            <option value="" hidden>Choose</option>
                            <option value="1">キュート</option>
                            <option value="2">ポップ</option>
                            <option value="3">エレガント</option>
                            <option value="4">ナチュラル</option>
                            <option value="5">スタイリッシュ</option>
                            <option value="6">和</option>
                            <option value="7">クラシック</option>
                            <option value="8">子供向け</option>
                            <option value="9">その他</option>
                        </select></td>
                        <th scope="row">→その他</th>
                        <td><input type="text" name="mail"></td>
                    </tr>
                    <tr>
                        <th scope="row">弊社にご依頼希望の事項</th>
                        <td rows="3">
                        <p>
                        <input type="checkbox" name="q1" value="その1"> ロゴ
                        <input type="checkbox" name="q1" value="その2"> キャラクター
                        <input type="checkbox" name="q1" value="その3"> アプリ<br>
                        <input type="checkbox" name="q1" value="その4"> Webサービス
                        <input type="checkbox" name="q1" value="その5"> チラシ作成<br>
                        <input type="checkbox" name="q1" value="その6"> 名刺作成
                        <input type="checkbox" name="q1" value="その8"> 動画撮影<br>
                        <input type="checkbox" name="q1" value="その7"> 写真撮影（ドローン撮影も可）
                        <input type="checkbox" name="q1" value="その8">その他
                        </p></td>
                        <th scope="row">→その他</th>
                        <td><input type="text" name="mail"></td>
                    </tr>
                    <tr>
                        <th scope="row">その他、ご要望、ご質問事項</th>
                        <td colspan="3"><textarea name="adress" id="#" cols="60" rows="5"></textarea></td>
                    </tr>
                </table>
            </div>
            <p><input type="submit" value="送信する" class="sent"></p>
            <p><a href="web_make">
                <input type="submit" value="　戻る　" class="back">
            </a></p>
        </form>
    </div>
</div>
    
    
    @include('footer')
    
    @endsection