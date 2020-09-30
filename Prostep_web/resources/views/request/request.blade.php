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
            <tr><th>お名前【必須】 </th><td><input type="text" name="name" value="{{old('name')}}"placeholder="プロステップ"></td></tr>
            @error('mail')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>メールアドレス【必須】</th><td><input type="text" name="mail" value="{{old('mail')}}"placeholder="prostep@gmail.com"></td></tr>
            @error('please_tel')
            <tr><th>ERROR</th>
            <td>{{$message}}</td></tr>
            @enderror
            <tr><th>電話番号【必須】</th><td><input type="text" name="please_tel" value="{{old('please_tel')}}"placeholder="ハイフン必要なし"></td></tr>
            @error('industry')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>どんな業種のHPですか？【必須】</th><td><input type="text" name="industry" value="{{old('industry')}}"placeholder="飲食店・コーポレートサイト等"></td></tr>
            @error('page')
                <tr><th>ERROR</th>
                <td>{{$message}}</td></tr>
            @enderror
            <tr><th>何ページくらいをお考えですか？【必須】</th><td><select class="" name="page">
                <option value="">選択して下さい</option>
                <option value="1" @if(old('area')=="option1") selected @endif>１</option>
               <option value="2" @if(old('area')=="option2") selected @endif>２</option>
               <option value="3" @if(old('area')=="option3") selected @endif>3</option>
               <option value="4" @if(old('area')=="option4") selected @endif>4</option>
               <option value="5" @if(old('area')=="option5") selected @endif>5</option>
               <option value="6" @if(old('area')=="option6") selected @endif>6</option>
               <option value="7" @if(old('area')=="option7") selected @endif>7</option>
               <option value="8" @if(old('area')=="option8") selected @endif>8</option>
               <option value="9" @if(old('area')=="option9") selected @endif>9</option>
               <option value="10" @if(old('area')=="option10") selected @endif>10</option>
               <option value="11" @if(old('area')=="option11") selected @endif>11</option>
               <option value="12" @if(old('area')=="option12") selected @endif>1２</option>
               <option value="13" @if(old('area')=="option13") selected @endif>13</option>
               <option value="14" @if(old('area')=="option14") selected @endif>14</option>
               <option value="15" @if(old('area')=="option15") selected @endif>15</option>
            </select></td></tr>
            <tr><th>付けたい機能はありますか？</th><td><textarea placeholder="画像スライド・新着情報機能・ブログ機能・その他"　name="function"　cols="50" rows="5"></textarea></td></tr>
            <tr><th>その他、不明点や気になることがありましたらご記入ください</th><td><textarea name="request_contents"　cols="50" rows="5"></textarea></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    copyright 2020 koyama
@endsection
