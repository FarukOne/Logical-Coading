<?php
function sum_of_last_first($number){
    $num =$number;
    $first =0;
    while(floor($number) != 0){
        $first =$number%10;
        $number =$number/10;
    }
    $last =$num%10;
    $sum = $first + $last;
    echo "First is:$first<br>";
    echo "Last is:$last<br>";
    echo "Sum is: $sum";
}
$n = 678;
sum_of_last_first($n);