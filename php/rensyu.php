
<?php
$sum =0;
for ($i=1; $i<=10; $i++) {

  $sum += $i;
}

echo $sum;
echo "\n";


function wa($syou,$dai) {
  $sum1 =0;
  for ($a = $syou; $a<= $dai; $a++) {
    $sum1 += $a;
  }
  return $sum1;
}

echo wa(1,10);
echo "\n";



function en($en) {

  $c = $en * $en * 3;

  return $c;

}

echo en(2);
echo "\n";



class sample {
  public $name = 'koyama';

  public function namae() {
    return "syun";


  }
}

$instances = new sample();
echo $instances->name;
echo "\n";

echo $instances -> namae();
echo "\n";

$instances -> name = 'suzuki';
echo $instances -> name ;
echo "\n";






class yakiniku {

  public $bui = 'タン塩';

  public function niku($nikuniku) {

    echo $nikuniku;
    echo "\n";

  }
}


class sushi extends  yakiniku {
  public function niku($nikuniku) {
    echo $nikuniku.'は好きではありません';
    echo "\n";
  }
  public $neta = "中トロ";
}


$oniku = new yakiniku();
$oniku->niku("カルビ");

echo $oniku->bui;
echo "\n";

$oniku -> bui ="ハラミ";
echo $oniku->bui;
echo "\n";




$child = new sushi();
$child -> niku("お肉");
echo $child->neta;
echo "\n";


 ?>
