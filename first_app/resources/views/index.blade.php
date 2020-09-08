@extends('...common.layout')

@section('user_index')
    @foreach ($items as $item)
    {{ $item -> getData() }}<br>
    @endforeach
@endsection
