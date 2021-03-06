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
    <form action="/result" method="POST">
        <table>
            @csrf
            @error('name')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>お名前: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @error('mail')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>メールアドレス: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            @error('contents')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>お問い合わせ内容: </th><td><textarea name="contents"　cols="50" rows="5"> {{old('contents')}}</textarea></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    copyright 2020 koyama
@endsection
