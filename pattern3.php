<?php
 for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
        if($i >= $j){
                echo "* ";
        }else{
            echo "- ";
        }
    }
    echo "<br>";
 }
