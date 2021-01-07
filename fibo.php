<?php
$n=100;
$first =1;
$second =1;
$third =0;
while($third <= $n){
    echo $third.",";
    $first =$second;
    $second =$third;
    $third =$first+$second;
}