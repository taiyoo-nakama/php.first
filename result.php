<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$choice = htmlspecialchars($_POST['choice'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number'],ENT_QUOTES);
?>

<p>私の名前は、<?php echo $name;?></p>
<p>ご希望商品は,<?php echo $choice;?></p>
<p>注文数は、<?php echo $number;?></p>
