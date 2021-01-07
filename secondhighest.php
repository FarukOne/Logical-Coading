<?php
function second($array){
    $first = $array[0];
    $second =$array[0];
    for($i=0;$i<count($array);$i++)
    {
        if($first < $array[$i])
        {
            $second = $first;
            $first = $array[$i];
        }
        else if($second < $array[$i])
        {
            $second = $array[$i];
        }

    }
    echo "Second Highest Number:$second <br>";
    echo "Highest number: $first";
}
$array =["2","5","11","7","13","13",'20'];
second($array);