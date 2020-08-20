<?php

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
  $sum2 += $a;
}

echo '21~100までの和：'.$sum2;
echo "\n";

//1~10までの積
$sum3 = 1;

for ($b=1; $b<=10; $b++) {
  $sum3 *= $b;
}
echo '1~10までの積：'.$sum3;
echo "\n";

//２１~１００までの積
$sum3 = 1;

for ($b=21; $b<=100; $b++) {
  $sum3 *= $b;
}
echo '21~100までの積：'.$sum3;
echo "\n";

// FizzBuzz問題
for ($c=1; $c<=100; $c++) {
  if ($c % 3 == 0 && $c % 5 == 0) {
    echo 'FizzBuzz';
    echo "\n";
  } else if ($c % 5 == 0) {
    echo 'Buzz';
    echo "\n";
  } else if ($c % 3 == 0) {
    echo 'Fizz';
    echo "\n";
  } else {
    echo $c;
    echo "\n";
  }
}

// フィボナッチ数列を表示（５００まで）
// 1,1,2,3,5,8,13,21 ２つ前の数字と一つ前の数字を足す
$i1 = 0;
$i2 = 1;
$i3 = 0;

while ($i3 <= 500) {
  $i3 = $i1 + $i2;

  echo $i3;
  echo "\n";

  $i1 = $i2;
  $i2 = $i3;
}


// 練習
function job($syokugyo = "社会人")
{
  return "職業は　$syokugyo です。";
}
echo job();
echo "\n";
echo job("大学生");
echo "\n";

//整数の和をメゾット化
function wa($syou,$dai) {
  for ($i=$syou; $i<=$dai; $i++) {
    $sum4 += $i;
  }
  return $sum4;
}

echo wa(1,10);
echo "\n";

//1~10までの積
function seki($small,$big) {
  $sum5 = 1;

  for ($b=$small; $b<=$big; $b++) {
    $sum5 *= $b;
  }
  return $sum5;
}
echo seki(1,10);
echo "\n";


// // return
// function ko($a) {
//     return $a.'shun';
// }
//
//  $s = ko('koyama');
//  echo $s;
// echo "\n";
//
//
//
// function go($name) {
//   return $name.'hiroki';
// }
//
// $m = go('ootuka');
// echo $m;
// echo "\n";
//
//
//
// function sum($i) {
//   return $i+$i+$i;
// }
//
// $tu = sum(10);
//
// echo $tu;
// echo "\n";
//
//
//
// function name($w) {
//   echo 'こんにちは'.$w.'さん';
//   echo "\n";
//   echo "こんにちは $w さん";
//   echo "\n";
// }
//
// name('shun');


 ?>
