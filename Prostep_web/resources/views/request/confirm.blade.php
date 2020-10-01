@extends('layouts.maching_web')

@section('title','Price')

@section('main')
    @parent

@endsection

@section('content')
        <form method="POST" action=/result>
        <input type="hidden" name="name" value={{$inputs['name']}}>
        <input type="hidden" name="mail" value=<?php echo $inputs['mail'];?> >
        <input type="hidden" name="inquiry_contents" value={{$inputs['inquiry_contents']}}>
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
