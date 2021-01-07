<?php
$num =6;
$a=1;
for($i=1; $i<=$num; $i++){
    $k=$a;
    for($j=1; $j<=$num-1; $j++){
        echo $k." ";
        $k=$k+$num;
    }
    $a++;
    echo "<br>";
}
