<?php
$array['japan'] = "tokyo";
$array['china'] = "beijin";
$array['vetnum'] = "hanoi";
$array['indonesia'] = "jakalta";
$array['miyazakioukoku'] = "shibuya";

foreach($array as $key => $val){
echo "キーは". $key ."<br>";
echo "値は" . $val . "<br>";
if($key == "china"){
echo $key. "は今年僕が2回行ったところです<br>";
}

}
$param['country'] = $array;
$param['person']['yamamoto'] = '36';
$param['person']['doi'] = '26';
$param['person']['miyazaki'] = '31';



foreach ($param as $key => $val) {
echo "キーは" . $key . "<br>";
echo "値は" . $val . "<br>";

foreach ($val as $key2 =>$val2) {
echo $key2 ."<br>";
echo $val2 . "<br>";
if ($key2 == "china") {
echo $key ."は、今年僕が２回行ったところです<br>";
}
}
}

foreach($param['person'] as $key3 => $val3) {
echo "キーは" . $key3 . "<br>";
echo "値は" . $val3 . "<br>";
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1>今日はforeachmやりますよ</h1>
</body>
</html>
