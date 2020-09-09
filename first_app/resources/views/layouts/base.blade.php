<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <style>
                body {font-size: 16pt; color: #999; margin: 5px;}
                .content {margin: 10px;}
                .footer {text-align: right; font-size: 10pt; margin: 10px;
                    border-bottom: solid 1px #ccc; color: #ccc;}
                th {background-color: #999; color: fff; padding: 5px 10px;}
                td {border: solid 1px #aaa; color: #999; padding: 5px 10px; }
            </style>
        </head>
        <body>
            <h1>@yield('title')</h1>
            @section('menubar')
            <h2 class="menutitle">メニュー</h2>
            <ul>
                <li>@show</li>
            </ul>
            <hr size="1">
            <div class="content">
                @yield('content')
            </div>
            <div class="footer">
                @yield('footer')
            </div>
    </body>
</html>
