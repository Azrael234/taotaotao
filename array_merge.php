<?php
$name = "dada 阿卡邯郸市 a阿卡得喊我卡机的hjwi士大夫da阿斯蒂芬jldjaljwialajklawjlawdklawj";
$name1 = explode("a", $name);
$preg = "/\W/";
$name2 = preg_grep($preg, $name1);
$name3 = array_merge($name2);//将数组重新组合  键名从1开始，或者是将2个数组组合到一起
print_r($name2);
echo "<p>";
print_r($name3);
?>