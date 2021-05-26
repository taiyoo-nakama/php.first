
<body>
<h2>index.php</h2>
  <form action="result.php" method="POST">
  お名前：<input type="text" name="name">
  <br>
  ご希望商品：
  <input type="radio" name="choice" value="Aセット" >Aセット
  <input type="radio" name="choice" value="Bセット" >Bセット
  <input type="radio" name="choice" value="Cセット" >Cセット
  <br>
  注文数：<select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
  <br/>
  <input type="submit" name="submit" value="送信"/>
  </form>
</body>
</html>