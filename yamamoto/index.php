<?php
$country = $_GET['country'];
$person = $_GET['person'];

foreach($_GET as $key =>$val) ;?>


<div class="list">
<h3><?php echo $key; ?></h3><p><?php echo $val?></p>
</div>





<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php echo $name; ?></title>
</head>
<body>

<h1>phpの講義です。</h1>
<h2>メンバー</h2>
<h3><?php echo $name; ?></h3>
<p><?php echo $name;?></p>

<h2>配列エコーするよ</h2>
<p><?php echo $person['email'] ;?></p>

<p><?php echo $miyazaki['info'] ;?></p>

<form action="send.php" method="post">
 
 
  <input type="text" name="hobby">
  <input type="text" name="name">
  <input type="submit" value="送信">
</form>

</body>
</html>
