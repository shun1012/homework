

    <!-- include("resources/views/_parts/header.blade.php"); -->


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>自己紹介ページ</title>
         <link rel="stylesheet" href="css/styles.css">
     </head>
     <body>
        <header
          <div class="container">
               <div class="icon">
                   <img src="images/mypic0.jpg" widht="200" height="200" alt="my picture">
               </div>
               <div class="info">
                 <h1>小山　瞬</h1>
                 <p>31歳からプログラミング学習をはじめました。</p>
                </div>
          </div>
        </header>
     <main class="main">
          <div class="hometown">
             <a href="{{ url('/hometown') }}"><h2>HOMETOWN</h2>
             <div class="hometown-images">
                 <img src="images/hometown.jpg" width="600" height="400" alt="hometown">
             </div></a>
          </div>
          <div class="hobby">
             <a href="{{ url('/hobby') }}"><h2>HOBBY</h2>
             <div class="hobby-images">
                 <img src="images/kakutougi.jpg" width="600" height="400" alt="tekwon-do">
             </div></a>
          </div>
          <div class="works">
             <a href="{{ url('/works') }}"> <h2>WORKS</h2>
             <div class="works-images">
                 <img src="images/works.jpg" width="600" height="400"alt="works">
             </div></a>
          </div>
     </main>
     <footer>
          <P>&copy;Copyright SHUN's introduction. All rights reserved.</P>
     </footer>
    </body>
</html>
