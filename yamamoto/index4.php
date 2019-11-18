<?php

//設計図を書く
//クラスを書く
class person {
//インスタンス変数 == 関数間を自由に使うことができる変数
//インスタンス変数を使うときは$this->name などにしないといけない
public $name = "";

public function __construct(){
$this->name = "yamamoto";

}

public function get_age($param){
if ($param == $this->name) {
return "36";
}
}

public function get_hobby($param){
if ($param == "yamamoto") {
return "読書";
}
}

public function get_person($param){
$res['hobby'] = $this->get_hobby($param);
$res['age'] = $this->get_age($param);
return $res;
}

}
//実体化する
//オブジェクトにする
//オブジェクト化する
//インスタンス化する
//
$person = new person();

//$name = $_GET['name'];

$res = $person->get_person($person->name);

var_dump($res);
?>




