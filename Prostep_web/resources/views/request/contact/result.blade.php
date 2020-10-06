
@extends('layouts.maching_web')

@section('title','Price')

@section('main')
    @parent

@endsection

@section('content')
    <p>{{$msg}}</p>

    <a href={{'contact'}}>←コンタクトページに戻る</a>
@endsection

@section('footer')
    copyright 2020 koyama
@endsection
