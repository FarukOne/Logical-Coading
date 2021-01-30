<?php
$arr =[4,2,0,3,2,5];
$max =$arr[0];
$min =$arr[1];
$count=0;
for($i =2; $i<(count($arr)); $i++) {
    if($max >= $min){
        echo $max-$min;
        $min =$arr[$i];
    }else{
        $max =$min;
        $min =$arr[$i];

    }
}