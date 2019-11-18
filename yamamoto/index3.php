<?php

function get_age($param){

   $ret = "年齢は気にしなくていいでしょう";
   if ($param == "miyazaki"){
     $ret == '31'; 
   return $ret;
   } 
}

$name = $_GET['name'];
var_dump($name);

$res = get_age($name);
var_dump($res);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1>物件一覧</h1>
<?php 
foreach($_GET as $key =>$val) { ?>

<div class="list">
<h3><?php echo $key; ?></h3><p><?php echo $val?></p>
<?php 
if ($key == "値段" and $val > 100000) {
?>
<h2>めちゃたかいからやめたほうがええ</h2>
<?php } ?>
</div>
<?php } ?>
<h1>解析したタイトルは<?php echo $title; ?></h1>
<?php
$span = "<span >miyazaki</span>";
echo $span;
?>

<?php
$name="miyazaki";
?>
<span><?php echo $name; ?></span>

<?php
echo  "<span >miyazaki</span>";
?>


<span><?php echo "miyazaki"; ?></span>


</body>
</html>
