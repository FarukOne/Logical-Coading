<?php
for($i=1; $i<=5; $i++){
    $k=1;
    for($j=1; $j<=9; $j++){
        if($j>=6-$i && $j<=4+$i && $k){
            echo "* ";
            $k=0;
        }else{
            echo "- ";
            $k=1;
        }
    }
    echo "<br>";
}