@extends('...common.layout')

@section('index')
    @foreach ($items as $item)
    {{ $item -> getData() }}<br>
    @endforeach
@endsection
