<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
          <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        @section('main')
            <div class="header">
                <div class="header-upper">
                    <div class="header-logo">
                        <a href="index"><img src="images/prostep-logo.png" widht="100" height="100" alt="logo"></a>
                    </div>
                    <div class="header-contents">
                        <a href="{{'request'}}"><p>制作を依頼する</p></a>
                        <a href="{{'contact'}}"><p>お問い合わせ</p></a>
                    </div>
                </div>
                <div class="header-lower">
                    <ul>
                        <a href="{{'index'}}"><li>ホーム</li></a>
                        <a href="{{'price'}}"><li>料金プラン</li></a>
                        <a href="{{'flow'}}"><li>制作の流れ</li></a>
                        <a href="{{'performance'}}"><li>制作実績</li></a>
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
                    <a href="{{'performance'}}"><li>制作実績</li></a>
                </ul>
            </div>
            @yield('footer')
        </div>
    </body>
</html>
