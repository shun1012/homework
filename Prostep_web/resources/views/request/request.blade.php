@extends('layouts.maching_web')

@section('title','request')

@section('main')
    @parent

@endsection

@section('content')
<h1>お仕事依頼フォーム</h1>

    <p>{{$msg}}</p>
    @if(count($errors) > 0)
        <p>入力に問題があります。再度入力してください。</p>
    @endif
    <form action="/resultjob" method="POST">
        <table>
            @csrf
            @error('name')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>お名前 </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @error('mail')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>メールアドレス</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            @error('type')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>どんな業種のHPですか？</th><td><input type="text" name="type" value="{{old('type')}}"></td></tr>
            @error('page')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>何ページくらいをお考えですか？</th><td><select class="" name="page">
                <option value="">選択して下さい</option>
                <option value="1" @if(old('area')=="option1") selected @endif>１</option>
               <option value="2" @if(old('area')=="option2") selected @endif>２</option>
            </select></td></tr>

            <tr><th>付けたい機能はありますか？</th><td><input type="text" name="function"></td></tr>

            <tr><th>その他、不明点や気になることがありましたらご記入ください</th><td><textarea name="contents"　cols="50" rows="5"></textarea></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    copyright 2020 koyama
@endsection
