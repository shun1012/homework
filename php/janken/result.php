<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ジャンケンゲーム</title>
  </head>
  <body>
    <?php

      $janken = $_GET["janken"];
      echo 'あなたが出したのは'.$janken;
      echo "\n";


      $jankenPC = array("グー","チョキ","パー");
      $random = $jankenPC[ array_rand($jankenPC)];
      echo 'コンピューターが出したのは'.$random;
      echo "\n";

      if ($janken == $random) {
        echo '引き分けです';
      } 

      // switch ($jankenPC) {
      //   case '1':
      //     echo 'コンピューターはグーを出しました';
      //     echo "\n";
      //     break;
      //
      //   case '2':
      //     echo 'コンピューターはチョキを出しました';
      //     echo "\n";
      //     break;
      //
      //   case '3':
      //     echo 'コンピューターはパーを出しました';
      //     echo "\n";
      //     break;
      //
      //   default:
      //
      // }





     ?>

    <a href="janken.php">もう一度挑戦！</a>
  </body>
</html>
