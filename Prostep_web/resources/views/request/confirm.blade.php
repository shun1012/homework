@extends('layouts.maching_web')

@section('title','Price')

@section('main')
    @parent

@endsection

@section('content')
        <form method="POST" action=/result>
        @csrf


        <label>お名前</label>
          {{ $inputs['name'] }}


          <label>メールアドレス</label>
            {{ $inputs['mail'] }}


          <label>お問い合わせ内容</label>
             {{ $inputs['inquiry_contents'] }}


          <button type="submit" name="/contact" value="back">
       入力内容修正
   </button>
   <button type="submit" value="send">
       送信する
   </button>
</form>
@endsection

@section('footer')
    copyright 2020 koyama
@endsection
