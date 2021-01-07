<?php
$arr = [1,2,3,4,5,6,7,8,9,
    ['#', '*', 0]
];
shuffle($arr);
$new_arr =array();
foreach ($arr as $val){
    if(! is_array($val)){
        $new_arr[] =$val;
    }else{
        foreach ($val as $new_val){
            $new_arr[] =$new_val;
        }
    }
}
//foreach ($new_arr as $val2){
//    echo $val2.",";
//}
$num =0;
for($i=1; $i<=4; $i++){
    for($j=1; $j<=3; $j++){
        echo "$new_arr[$num]&nbsp ";
        $num++;
    }
    echo "<br>";
}
