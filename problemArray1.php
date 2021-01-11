<?php
$arr1 =[11, 12, 13];
$arr2 =['cake', 'fruit', 'icecream'];
$arr3 =['pasty', 'apple', 'vanilla'];

$arr =[
        [
            $arr1[0],
            $arr2[0],
            $arr3[0]
        ],
        [
            $arr1[1],
            $arr2[1],
            $arr3[1]
        ],
        [
            $arr1[2],
            $arr2[2],
            $arr3[2]
        ]
    ];
echo "<pre>";
print_r($arr);