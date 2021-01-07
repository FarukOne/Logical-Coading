<?php
$f=39;
$s=14;
$res =1;
for($i=1; $i<$f; $i++){
    if($f%$i==0 && $s%$i==0){
        $res =$i;
    }
}
echo $res;
