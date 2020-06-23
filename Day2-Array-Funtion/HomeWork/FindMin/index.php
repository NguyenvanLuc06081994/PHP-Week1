<?php
function findMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    return $min;
}
echo "min in array is : ".findMin([1,2,3,4,5,1,0]);