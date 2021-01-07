<?php
$n =5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=9; $j++){
        if($j>=6-$i && $j<=4+$i){
            echo " *";
        }
        else{
            echo " -";
        }
    }
    echo "<br>";

}
