<?php
$str ="faruk hossain";
$num =strlen($str);
$arr =array();
while($num !=0 ){
    $arr[] =$num;
    $num--;
}
//print_r($arr);
foreach ($arr as $val){
    echo $str[$val-1];
}