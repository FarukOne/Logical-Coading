<?php
//$numbers = ["2","5","11","7","13","19", "19", "13"];
////$arr = array_unique($numbers);
//$arr_new =array();
////$num =count($numbers);
//for($i=0; $i<count($numbers); $i++){
//   for($j =$i+1; $j<count($numbers); $j++){
//       if($numbers[$i] != $numbers[$j]){
//          for($k=$j; $k<count($numbers); $k++){
//              $arr_new[] =$numbers[$k+1];
//          }
//          $numbers--;
//          $j--;
//       }
//   }
//}
//print_r($arr_new);
//echo "Hello World";
////rsort($new);
////echo $new[1];
$input = array(5, 4, 2, 1, 6, 4, 9, 7, 2, 9,9,5);
$output = array();

foreach($input as $inputItem) {
    foreach($output as $outputItem) {
        if($inputItem == $outputItem) {
            continue 2;
        }
    }
    $output[] = $inputItem;
}
rsort($output);
//print_r($output);
echo "<br>".$output[1];