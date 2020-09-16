<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>hello/index</title>
    </head>
    <body>
        <p><?php echo date("Y年n月j日"); ?></p>
        @if ($msg != '')
        <p>こんにちは{{$msg}}さん！</p>
        @else
        <p>何か書いてください。</p>
        @endif
        <from method='POST' action="/hello">
            @csrf
            <input type ="text" name="msg">
            <input type="submit">
        </from>
    </body>
</html>
