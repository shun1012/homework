<?php
// データベースに接続するために必要なデータソースを変数に格納
  // mysql:host=ホスト名;dbname=データベース名;charset=文字エンコード
$dsn = 'mysql:host=localhost:3306;dbname=koyama1;charset=utf8';

  // データベースのユーザー名
$user = 'root';

  // データベースのパスワード
$password = 'shun1012';

// tryにPDOの処理を記述
try {

  // PDOインスタンスを生成
  $dbh = new PDO($dsn, $user, $password);

  // ①結果を返さない、安全なSQLに使用
  // $dbh -> exec("insert into person (id,name)values (5,'kouiti')");
  // echo 'person added!!';

  // ②query(): 結果を返す、安全、何回も実行されないSQL
  // $stmt = $dbh -> prepare("insert into person (id,name)values(?, ?)"); // ??にして配列を作って安全に格納
  // $stmt->execute([6, 'sato']);
  // echo "inserted: " . $dbh->lastInsertId();

  // ③prepare(): 結果を返す、安全対策が必要、複数回実行されるSQL
  // $stmt = $dbh-> query ("select * from person");
  // $persons = $stmt -> fetchAll(PDO::FETCH_ASSOC);
  // foreach ($persons as $person) {
  //   var_dump($person);


  $stmt = $dbh -> prepare("select id from person where id > ?");
  $stmt->execute([4]);
  echo $stmt->rowCount() . " records found.";

  $stmt = $dbh -> prepare("select name from person where name like ?");
  $stmt->execute(['%o%']);

  $persons = $stmt -> fetchAll(PDO::FETCH_ASSOC);
  foreach ($persons as $person) {
    var_dump($person);
  }
  echo $stmt->rowCount() . " records found.";



// エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {

  // エラーメッセージを表示させる
  echo 'データベースにアクセスできません！' . $e->getMessage();

  // 強制終了
  exit;

}
// test comment 
