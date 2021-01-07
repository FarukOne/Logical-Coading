<?php
function armstrong($number, $res){
    $old =$number;
    while($number != 0){
        $rem = $number%10;
        $res = $res + $rem*$rem*$rem;
        $number =$number/10;
    }
    if($old == $res ){
        echo "$old is a Armstrong Number";
    }else {
        echo "$old is not a Armstrong";
    }

}
$number =153;
$res =0;
armstrong($number, $res);