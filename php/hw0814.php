<?php

function sum($a,$b)
{
  echo $a
}

sum(1,10)
sum(21,100)


// 1~10までの整数の和
$sum = 0;

 for ($i=1; $i<=10; $i++) {
   $sum += $i;

 }

 echo '1~10までの和：'.$sum;
 echo "\n";

 // ２１~１００までの整数の和
$sum2 = 0;

for ($a=21; $a<=100; $a++) {
  $sum2 +=$a;
}

echo '2~100までの和：'.$sum2;
echo "\n";

//1~10までの積
$sum3 = 1;

for ($b=1; $b<=10;$b++) {
  $sum3 *=$b;
}
echo '1~10までの積：'.$sum3;
echo "\n";

//２１~１００までの積
$sum3 = 1;

for ($b=21; $b<=100;$b++) {
  $sum3 *=$b;
}
echo '21~100までの積：'.$sum3;
echo "\n";

// FizzBuzz問題
for ($c=1; $c<=100; $c++) {
  if ($c % 3 == 0 && $c % 5 ==0) {
    echo 'FizzBuzz';
    echo "\n";
  }else if ($c % 5 ==0) {
    echo 'Buzz';
    echo "\n";
  }else if ($c % 3 == 0) {
    echo 'Fizz';
    echo "\n";
  }else {
    echo $c;
    echo "\n";
  }
}

// フィボナッチ数列を表示（５００まで）
// 1,1,2,3,5,8,13,21 ２つ前の数字と一つ前の数字を足す
// for ($d=1; $d<=100; $d++) {
//   $e =　
// }
// echo $d;
// echo "\n";





 ?>
