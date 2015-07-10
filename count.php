<?php
$str = "adwjsadjiwaiwdladjwilajslidjwailjsldijaisjdialwjdlisdjilawjdlsd";
$arr = explode("a", $str);
$count = count($arr);//统计数组中多少个元素；
$arr1 = array(array("123123","asdaw","fargd","adwad"),array("awdasdwa","gserlk","fjseklf"));
echo count($arr1,COUNT_RECURSIVE);//COUNT_RECURSIVE统计arr1中一共有多少个元素，第一层有2个元素，第一层的第一个数组有4个元素
								//第二个数组有3个元素  所以一共有2+3+4 = 9个元素

?>