<?php
function prime($number){
    $flag =0;
    for($i=2; $i<= $number/2; $i++){
     if(( $number % $i ) == 0){
         $flag++;
     }
    }
    if($flag == 0){
        echo "$number is a prime number";
    }else{
        echo "$number is not a prime number";
    }
}

$number =7;
prime($number);
