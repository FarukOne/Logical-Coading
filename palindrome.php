<?php
function palindrome($number, $res){
    $old = $number;
    if(is_string($number)){
     $rev =strrev($number);
        if($old == $rev ){
            echo "$old is a Palindrome String";
        }else {
            echo "$old is not a Palindrome String" ;
        }
    }else{
        while(floor($number) != 0){
            $rem =$number%10;
            $res =$res*10 + $rem;
            $number = $number/10;
        }
        if($old == $res ){
            echo "$old is a Palindrome Number";
        }else {
            echo "$old is not a Palindrome Number";
        }
    }

}
$number =1211;
$res =0;
palindrome($number, $res);