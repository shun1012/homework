<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>hello/index</title>
    </head>
    <body> -->
        <!-- <p><?php echo date("Y年n月j日"); ?></p>
        @if ($msg != '')
        <p>こんにちは{{$msg}}さん！</p>
        @else
        <p>何か書いてください。</p>
        @endif
        <from method='POST' action="/hello">
            @csrf
            <input type ="text" name="msg">
            <input type="submit">
        </from> -->

        <!-- リスト3-21 -->
        <!-- <ol>
            @foreach($data as $item)
            <li>{{$item}}</li>
            @endforeach
        </ol>

    </body>
</html> -->

@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ

@endsection

@section('content')

    <!-- リスト5-5 -->
    <table>
        <tr><th>Name</th><th>Price</th><th>Day</th></tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->day}}</td>
        </tr>
        @endforeach
    </table>
    <!-- <p>ここが本文です</p>

    @component('components.message')
        @slot('msg_title')
        CAUTION!!!!!!!!
        @endslot

        @slot('msg_content')
        これはメッセージです
        @endslot
    @endcomponent

    @foreach($data as $item)
    <li>{{$item}}</li>
    @endforeach -->

    <!-- <form action="/hello" method="post">
        <table>
            @csrf
            <tr><th>name:</th><td><input type = "text" name = "name"></td></tr>
            <tr><th>mail:</th><td><input type = "text" name = "mail"></td></tr>
            <tr><th>age:</th><td><input type = "text" name = "age"></td></tr>
            <tr><th></th><td><input type = "submit" value="send"></td></tr>
        </table>
    </form> -->
@endsection

@section('footer')

copyright 2020 tuyano.
@endsection
