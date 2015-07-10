<?php
include 'C:\wamp\www\youyicidxuexi\test\includ.php';
$ex=str_ireplace("
", ",",$place);
$ex1=str_ireplace("	", ",", $ex);
$ex2=explode(",", $ex1);
$preg2="/\W/";//匹配非英文单词和数字
$preg3="/\w/";//匹配英文单词和数字
$ex3=preg_grep($preg2, $ex2);
$ex4=array_merge($ex3);
$num=preg_grep($preg3, $ex2);
$num1=array_merge($num);
$a=array_rand($num1);//和RAND（1，count（$num1）-1）是一样的效果
echo $num1[$a]."<br>";
echo $num1[$a];

?>