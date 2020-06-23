<?php
function findMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
$arrNew = [[1,2,3,4,5]
    ,[5,6,7,8]
    ,[9,12,12]];
echo findMax($arrNew);



