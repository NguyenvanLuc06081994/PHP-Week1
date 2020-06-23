<?php
function find($arr)
{
    $max = max($arr);
    $arrNew = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($max === $arr[$i]){
            array_push($arrNew, $i);
        }
    }
    return $arrNew;
}
print_r(find([1,2,5,0,5,2]));
