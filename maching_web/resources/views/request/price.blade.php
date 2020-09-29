@extends('layouts.maching_web')

@section('title','Price')

@section('main')
    @parent

@endsection

@section('content')
    <div class="price">
        <h2>料金プラン</h2>
    </div>
    <div class="price-img">

    </div>
    <div class="price-table">
        <table>
            <tr>
                <th>          </th>
                <th>簡単お任せプラン</th>
                <th>こだわりプラン</th>
            </tr>
            <tr>
                <td>初期費用</td>
                <td><strong>¥89,800</strong></td>
                <td><strong>¥149,800</strong></td>
            </tr>
            <tr>
                <td>月額費用</td>
                <td>¥6,980</td>
                <td>¥6,980</td>
            </tr>
            <tr>
                <td>公開ページ</td>
                <td>5P※1.</td>
                <td>5P※1.</td>
            </tr>
            <tr>
                <td>スマホサイト</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>お問合せフォーム</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>デザイン</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>システム設計</td>
                <td>△</td>
                <td>○</td>
            </tr>
            <tr>
                <td>googlemap埋め込み</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>納期</td>
                <td>１ヶ月※2</td>
                <td>1.5~2ヶ月※2</td>
            </tr>
            <tr>
                <td>ドメイン</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>サーバー</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td>毎月の更新</td>
                <td>○※3</td>
                <td>○※3</td>
            </tr>
        </table>
    </div>
    <div class="price-caution">
        <p>※1.公開ページ5pの内容は、トップページ・会社概要・特徴・サービス紹介・問合せフォームです。ページの追加も可能です。</p>
        <p>※2.納期にはある程度余裕をみて頂けると嬉しいです。</p>
        <p>※3.毎月の更新は、文言変更〇〇箇所まで。画像変更〇〇箇所までとさせていただきます。</p>
    </div>
    <div class="after">
        <h2>ホームページは、作った後の管理もとっても重要。。。</h2>
        <p>サーバーの管理から、メニューの変更、ニュースの更新、画像の変更etc,,,</p>
        <h1>そんな制作後の管理も、プロステップに全てお任せください。</h1>
    </div>
    <div class="after-2">
        <p>①サーバーの管理費</p>
        <p>サーバーとは、WEBページを公開するために必要不可欠なデータの保管場所です。毎月費用が発生します。</p>
        <p>②ドメイン費用</p>
        <p>ドメインとは、ネット上における「表札」のようなもので、サーバーと同じくホームページには必要不可欠です。毎月費用が発生します。</p>
        <p>サイトの更新</p>
        <p>毎月、変更が合った際に更新を行います。</p>
    </div>

@endsection

@section('footer')
    copyright 2020 koyama
@endsection
