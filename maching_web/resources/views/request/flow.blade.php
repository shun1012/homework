@extends('layouts.maching_web')

@section('title','Flow')

@section('main')
    @parent

@endsection

@section('content')
    <div class="flow">
        <h3>一目でわかる制作の流れ</h3>
        <div class="flow-1">
            <h4>STEP1:ヒアリング</h4>
            <p>どんなホームページを作りたいのか、まずはお聞かせください。<br>
                サイトを作る目的、どんな人にみてもらいたいか、</p>
        </div>
        <div class="flow-2">
            <h4>STEP2:制作スタッフ紹介</h4>
        </div>
        <div class="flow-3">
            <h4>STEP3:制作における情報収集</h4>
        </div>
        <div class="flow-4">
            <h4>STEP4:制作開始</h4>
        </div>
        <div class="flow-5">
            <h4>STEP5:テスト公開</h4>
        </div>
        <div class="flow-6">
            <h4>STEP6:最終チェック</h4>
        </div>
        <div class="flow-7">
            <h4>STEP7:スタッフのレビューをいただきます</h4>
        </div>

    </div>
@endsection

@section('footer')
    copyright 2020 koyama
@endsection
