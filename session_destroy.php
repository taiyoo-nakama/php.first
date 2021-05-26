<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<html>
<body>
  <p>セッション破棄</p>
  <p>セッションは<?php echo $_SESSION["language"] ?>です</p>
  <p><a href="session.php">最初に戻る</a></p>
</body>
</html>