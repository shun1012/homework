

    <!-- include("resources/views/_parts/header.blade.php"); -->


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>自己紹介ページ</title>
     </head>
     <body>
        <header>
          <div class="container">
               <div class="icon">
                   <img src="images/mypic0.jpg" widht="200" height="200" alt="my picture">
               </div>
               <div class="info">
                 <h1>小山　瞬</h1>
                 <p>31歳からプログラミング学習をはじめました。</p>
                  <a href="{{ url('/cat') }}">猫紹介ページ</a>
                </div>
          </div>
        </header>
     <main class="main">
          <div class="hometown">
             <a href="{{ url('/hometown') }}"><h2>HOMETOWN</h2></a>
          </div>
          <div class="hobby">
             <a href="{{ url('/hobby') }}"><h2>HOBBY</h2></a>
          </div>
          <div class="works">
             <a href="{{ url('/works') }}"> <h2>WORKS</h2></a>
          </div>
     </main>
     <footer>
          <P>&copy;Copyright SHUN's introduction. All rights reserved.</P>
     </footer>
    </body>
</html>
