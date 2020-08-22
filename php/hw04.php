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


// 継承練習２
class yakinikuClass {
  public function ushi($bui) {
    echo $bui.'が好きです';
    echo "\n";
  }
  public function buta($syurui) {
    echo $syurui.'が好きです';
    echo "\n";
  }
}
class sakanaClass extends yakinikuClass {
  public function ushi($bui) {
    echo $bui.'より魚が好きです';
    echo "\n";
  }
}
$meat = new yakinikuClass();
$fish = new sakanaClass();

$meat->ushi('タン塩');
$meat->buta('豚トロ');
$fish->ushi('肉');


// 抽象クラス
abstract class AbstractClass
{
  // 抽象メソッドの定義をする
  abstract protected function getvalue();
  abstract protected function gettext($str);

  // メソッドの定義
  public function thisClass() {
    echo $this->getvalue();
    echo "\n";
  }
}

class SampleClass1 extends AbstractClass
{
  protected function getvalue() {
    return "サンプルクラス１";
  }
  public function gettext($str) {
    return $str.'サンプルクラス１';
  }
}

class SampleClass2 extends AbstractClass
{
  public function getvalue() {
    return "サンプルクラス２";
  }
  public function gettext($str) {
    return $str.'サンプルクラス２';
  }
}

$class1 = new SampleClass1;  // ()がいらない
$class2 = new SampleClass2;

$class1->thisClass();
echo $class1->gettext('侍');
echo "\n";
$class2->thisClass();
echo $class2->gettext('エンジニア');
echo "\n";


// 抽象化練習
abstract class aboutClass {
  abstract protected function sushi();
  abstract protected function tenpura($yasai);

  public function thisclass() {
    echo $this->sushi();
    echo "\n";
  }
}

class tyuusyouClass1 extends aboutClass {
  protected function sushi() {
    return "大好き";
  }
  public function tenpura($yasai) {
    return $yasai.'天ぷらも好きです';
  }
}

class tyuusyouClass2 extends aboutClass {
  protected function sushi() {
    return '丼も好き';
  }
  public function tenpura($yasai) {
    return $yasai.'は嫌い';
  }
}

$osushi = new tyuusyouClass1;
$otenpura = new tyuusyouClass2;

echo $osushi->thisclass();
echo "\n";

echo $osushi->tenpura('なす');
echo "\n";


echo $otenpura->thisclass();
echo "\n";

echo $otenpura->tenpura('かぼちゃ');
echo "\n";


// コンストラクタ
class  constClass {
  protected $text;

  // コンストラクタの定義
  function construct() {
    $this->text = "samurai enjineer";
  }
  // メソッドの定義
  function show() {
    echo $this->text;
    echo "\n";
  }
}
// インスタンスの生成
$class = new constClass();

// メソッドの呼び出し
$class->show();



// コンストラクタの練習
class sapuri {
  protected $contents;

  function __construct() {
    $this->contents = 'ビタミン';
  }
  function first() {
    echo $this->contents;
    echo "\n";
  }
}

$vitamin = new sapuri();

$vitamin->first();



// 静的メンバの使用(static)
class foo {
  // 静的変数を作成
  public static $val = 10;
}
// 静的変数の参照  インスタンスを生成しなくていい
$value = foo::$val;
echo $value;
echo "\n";

// static 練習
class Shun {
  public static $a = 'koyama';
}
$b = Shun::$a;
echo $b;
echo "\n";


// 定数の使用(const)
class contryClass {
  const constname1 = 'japan';
  const constname2 = 'america';
  const constname3 = 'china';

  function showConst() {
    echo self::constname1;
    echo "\n";
    echo self::constname2;
    echo "\n";
    echo self::constname3;
    echo "\n";
  }

}
$Class = new contryClass();
$Class-> showConst();


?>
