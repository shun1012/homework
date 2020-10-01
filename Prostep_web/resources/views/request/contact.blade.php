@extends('layouts.maching_web')

@section('title','Price')

@section('main')
    @parent

@endsection

@section('content')
<h1>お問い合わせフォーム</h1>
    <p>サービスや採用に関するお問い合わせは、こちらからお願いいたします。<br></p>
    <p>{{$msg}}</p>
    @if(count($errors) > 0)
        <p>入力に問題があります。再度入力してください。</p>
    @endif
    <form action="/confirm" method="POST">
        <table>
            @csrf
            @error('name')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>お名前: </th><td><input type="text" name="name" value="{{old('name')}}"placeholder="プロステップ"></td></tr>
            @error('mail')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>メールアドレス: </th><td><input type="text" name="mail" value="{{old('mail')}}"placeholder="prostep@gmail.com"></td></tr>
            @error('inquiry_contents')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>お問い合わせ内容: </th><td><textarea name="inquiry_contents"　cols="50" rows="5"> {{old('inquiry_contents')}}</textarea></td></tr>
            <tr><th></th><td><input type="submit" value="確認する"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    copyright 2020 koyama
@endsection
