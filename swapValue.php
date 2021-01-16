<?php
$arr =['A'=>'Add', 'B'=>'Boy'];
foreach ($arr as $key=>$val){
    $arr1[]=$val;
    $arr_key[]=$key;
}
$arr2=[];
for($i=(count($arr1)-1); $i>=0; $i--){
    $arr2[]=$arr1[$i];
}
print_r(array_combine($arr_key, $arr2));