<?php
$arr =[1,9,3];
$arr2 =[9,9,9,9,3];
$r =0;
if(count($arr) > count($arr2))
    $max =count($arr);
else
    $max =count($arr2);
for($i=0; $i<$max; $i++){
    $res = 0;
    $res = $arr[$i]+$arr2[$i]+$r;
    if($res > 9){
        $ar[] =$res%10;
        $r =1;
    }else{
        $ar[] =$res;
        $r =0;
    }
}
print_r($ar);
