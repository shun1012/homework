@extends('layouts.helloapp')

@section('title','Person.index')

@section('menubar')
    @parent
    インデックスページ

@endsection

@section('content')
    <table>
        <tr><th>NAME</th><th>MAIL</th><th>AGE</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>

        </table>
    </form>



@endsection

@section('footer')

copyright 2020 tuyano.
@endsection
