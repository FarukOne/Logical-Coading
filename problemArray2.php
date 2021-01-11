<?php
$f =["a"=>'tom', "b"=>'sam'];
$s =["good"=>$f, "bad"=>'jhon'];
function myfunction($value, $key)
{
    echo "$key is $value<br>";
}
array_walk_recursive($s, "myfunction");