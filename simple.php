<?php
function simple($amount, $rate, $time){
    $interest =0;
    $interest =($amount*$rate*$time)/100;
    return $interest;
}
$amount =100;
$rate =8;
$time =1;
$interest = simple($amount, $rate, $time);
echo "Simple interest: $interest";

