<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="course.php" method="GET">
  <label>会社名：<input type="text" name="company"></label>
  <br/>
  <input type="submit" name="submit" value="送信する"/>
  </form>
</body>
</html>

<?php
$company = htmlspecialchars($_GET['company'],ENT_QUOTES);
print "会社名は".$company. "ですね";

//POSTと GETの使い分け

// GET
// ・サーバーから情報を取り出す。

// POST
// ・サーバーに情報を投稿する
// ・配列などの長いデータを送信する
// ・ファイルのアップロードを行う
