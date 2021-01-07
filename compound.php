<?php
function compound($p, $r, $t, $n){
    $compound =0;
    $exp = ($t*$n);
    $base =(1+(($r/$n)/100));
    $compound =($p*(pow($base, $exp)-1));
    return $compound;
}
$p =100;
$r =8;
$t =5;
$n=1;
$compound =compound($p, $r, $t, $n);
echo "Compound Interest: $compound";
