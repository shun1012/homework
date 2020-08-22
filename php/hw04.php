<?php
// lesson4 内容
// class SampleCass {
//   public $name = "中島";
//
//   public function getName() {
//       return "name";
//   }
//
// }
//
// $instance = new SampleCass();
// echo $instance->name . "\n";
// echo $instance->getName() . "\n";


class sampleCass {
  public $name = "小山";

  public function getname() {
    return "name";
  }
}
$instances = new SampleCass();
echo $instances->name . "\n";
echo $instances->getname() . "\n";


// HW04


//FizzBuzz問題のメソッド化
function fb($fizz,$buzz) {
  for ($c=1; $c<=100; $c++) {
    if ($c % $fizz == 0 && $c % $buzz == 0) {
      echo 'FizzBuzz';
      echo "\n";
    } else if ($c % $buzz == 0) {
      echo 'Buzz';
      echo "\n";
    } else if ($c % $fizz == 0) {
      echo 'Fizz';
      echo "\n";
    } else {
      echo $c;
      echo "\n";
    }
  }
}

echo fb(2,5);
echo "\n";


//4回目レッスンの復習　※サイトをみながら
// class の使い方
class koyamaClass {
  // プロパティの宣言
   public $hensyu = "小山";
   // メソッドの宣言
   public function shun() {
     return "しゅん";
   }
}
// インスタンスの生成
$instance = new koyamaClass();
// 呼び出すときは＄はいらない
echo $instance->hensyu;
echo "\n";

echo $instance->shun();
echo "\n";


// 練習１
class tokyoClass {
  public $city = "港区";
}

$minatoku = new tokyoClass();
echo $minatoku->city;
echo "\n";


// 練習２
class yakitori {
  public $kusi = "ねぎま";
}

$negima = new yakitori();
echo $negima->kusi;
echo "\n";

$negima->kusi = "はつ";
echo $negima->kusi;
echo "\n";

$negima->kusi = "ぼんじり";
echo $negima->kusi;
echo "\n";


// 練習３
class color {
  public $iro = "赤";
}

$red = new color();
echo $red->iro;
echo "\n";

$red->iro = "青";
echo $red->iro;
echo "\n";


// 練習４
class fruits {
  public $kudamono = "りんご";

  public function nasi() {
    return "なし";
  }
}

$ringo = new fruits();
echo $ringo->kudamono;
echo "\n";

echo $ringo-> nasi();
echo "\n";


//継承について
// 親クラス
class parentClass {
  public function item1($str) {
    echo $str."親クラス";
    echo "\n";
  }

  public function item2() {
    echo "こんにちは";
    echo "\n";
  }

}
// 子クラス
class childClass extends parentClass {
  public function item1($str) {
    echo $str.'子クラス'; //引き継いで中身は変えられる
    echo "\n";
  }
}
// インスタンスの生成
$parent = new parentClass();
$child = new childClass();

// メソッドの呼び出し
$parent->item1('呼び出し成功');
$child->item1('呼び出し成功');

$parent->item2();
$child->item2();


// 継承練習
class mamClass {
  public function food($tabemono) {
    echo $tabemono.'が好きです';
    echo "\n";
  }
  public function drink($nomimono) {
    echo $nomimono.'が好きです';
    echo "\n";
  }
}

class chiClass extends mamClass {
  public function food($tabemono) {
    echo $tabemono.'は嫌いです';
    echo "\n";
  }
}

$mam = new mamClass();
$chi = new chiClass();

$mam->food('アイス');
$chi->food('レーズン');
$mam->drink('コーラ');


?>
