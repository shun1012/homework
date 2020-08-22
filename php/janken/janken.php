<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ジャンケンゲーム</title>
  </head>
  <body>
    <h1>ジャンケンゲーム</h1>

    <form action="result.php" method="get">
      <label><input type="radio" name="janken" value="グー">グー</label>
      <label><input type="radio" name="janken" value="チョキ">チョキ</label>
      <label><input type="radio" name="janken" value="パー">パー</label>
      <button>開始！</button>
      <a href="janken.php">[reset]</a>
    </form>
  </body>
</html>
