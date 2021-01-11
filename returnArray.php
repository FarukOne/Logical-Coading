<?php
//function two($arr1){
//    $ar1 =[];
//    foreach ($arr1 as $val){
//        $ar1[] =$val*2;
//    }
//    return $ar1;
//}
function three($arr){
    $ar =[];
    foreach ($arr as $value){
        $ar[] =$value*3;
    }
    return $ar;
}
$arr =[1,2,3,4,5];
//$arr1=[15, 30, 14, 12];
//$ar1 = two($arr1);
$ar = three($arr);
print_r($ar);
echo "<br><br>";
//print_r($ar1);
