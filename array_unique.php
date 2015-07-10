<?php
$name = array(0,1,1,2,3,5,6,7,8,9);
for ($i=0;$i<10;$i++){
	array_push($name, $i);//向$name数组末尾添加$i
}
$name1 = array_unique($name);//删除数组中相同的元素
print_r($name1);
