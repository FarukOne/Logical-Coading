<?php
//function valid( $number)
//{
//    $getterNine = 0;
//    $oddSum =0;
//    $notGetterNine=0;
//    $f=1;
//    for($i=0; $i<count($number); $i++){
//        if(!$f){
//            $double= $number[$i]*2;
//            if($double > 9 ){
//                while(floor($double) != 0 ){
//                    $rem =$double%10;
//                    $getterNine =$getterNine + $rem;
//                    $double= $double/10;
//                }
//            }else{
//              $notGetterNine =$notGetterNine + $double;
//            }
//            $f++;
//        }else{
//            $oddSum=$oddSum + $number[$i];
//            $f--;
//        }
//    }
//    $totalSum =$oddSum + $getterNine + $notGetterNine;
//    if($totalSum % 10 === 0){
//        echo " It is Valid number ".$totalSum;
//    }else{
//        echo " It's not Valid number ".$totalSum;
//    }
//}

function gen()
{
    loop:
    $arr=[];
    for($n =0; $n<15; $n++){
        $rand = rand(0, 9);
        $arr[]=$rand;
    }
    $prefix=[8];
    $array =array_merge($prefix, $arr);
    $number =$array;
    $getterNine = 0;
    $oddSum =0;
    $notGetterNine=0;
    $f=1;
    for($i=0; $i<count($number); $i++){
        if($f){
            $double= $number[$i]*2;
            if($double > 9 ){
                while(floor($double) != 0 ){
                    $rem =$double%10;
                    $getterNine =$getterNine + $rem;
                    $double= $double/10;
                }
            }else{
              $notGetterNine =$notGetterNine + $double;
            }
            $f--;
        }else{
            $oddSum=$oddSum + $number[$i];
            $f++;
        }
    }
    $totalSum =$oddSum + $getterNine + $notGetterNine;
    if($totalSum % 10 === 0){
      foreach ($array as $val){
          echo $val;
      }
    }else{
        goto loop;
    }
}
$gen =gen();