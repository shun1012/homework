@extends('layouts.maching_web')

@section('title','Price')

@section('main')
    @parent

@endsection

@section('content')
        <form method="POST" action=/resultjob>
        <input type="hidden" name="name" value={{$inputs['name']}}>
        <input type="hidden" name="mail" value= {{$inputs['mail']}} >
        <input type="hidden" name="please_tel" value={{$inputs['please_tel']}}>
        <input type="hidden" name="industry" value= {{$inputs['industry']}} >
        <input type="hidden" name="page" value= {{$inputs['page']}} >
        <input type="hidden" name="functions" value= {{$inputs['functions']}} >
        <input type="hidden" name="please_contents" value= {{$inputs['please_contents']}} >


        @csrf


        <label>お名前</label>
          {{ $inputs['name'] }}


        <label>メールアドレス</label>
            {{ $inputs['mail'] }}


        <label>電話番号</label>
             {{ $inputs['please_tel'] }}

         <label>業種</label>
            {{ $inputs['industry'] }}

        　<label>ページ数</label>
           {{ $inputs['page'] }}


          <label>機能</label>
              {{ $inputs['functions'] }}

          <label>要望・その他</label>
             {{ $inputs['please_contents'] }}






          <button type="submit" name="/requestjob" value="back">
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
