<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
    </head>
    <body>
        @section('main')
            <div class="header">
                <div class="header-upper">
                    <a href="index"><img src="images/logo.jpg" widht="100" height="100" alt="logo"></a>
                    <a href="{{'request'}}"><p>仕事を依頼する</p></a>
                    <a href="{{'contact'}}"><p>お問い合わせ</p></a>
                </div>
                <div class="header-lower">
                    <ul>
                        <a href="{{'index'}}"><li>ホーム</li></a>
                        <a href="{{'price'}}"><li>料金プラン</li></a>
                        <a href="{{'flow'}}"><li>制作の流れ</li></a>
                        <li>制作実績</li>
                    </ul>
                </div>
            </div>
        @show
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            <div class="header-lower">
                <ul>
                    <a href="{{'index'}}"><li>ホーム</li></a>
                    <a href="{{'price'}}"><li>料金プラン</li></a>
                    <a href="{{'flow'}}"><li>制作の流れ</li></a>
                    <li>制作実績</li>
                </ul>
            </div>
            @yield('footer')
        </div>
    </body>
</html>
