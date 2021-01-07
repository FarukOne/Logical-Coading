<?php
function factroial($number){
    $res =1;
    while ($number != 0){
        $res = $res*$number;
        $number--;
    }
    echo $res;
}
$number = 5;
factroial($number);