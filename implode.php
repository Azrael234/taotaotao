<?php
$name = array("food"=>array("fuck","s","you"),"name"=>array("tao","jia"));
var_dump($name);
$name1 = implode(" ", $name["food"]);//组合数组，但是只能组合一维数组。1111
echo $name1;
?>