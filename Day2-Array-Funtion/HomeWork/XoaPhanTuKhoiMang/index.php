<?php
function del($arr, $x)
{
    for ($j = count($arr) -1; $j >= 0; $j--) {
        if ($x == $arr[$j]){
            array_splice($arr , $j, 1);
        }
    }
    return $arr;
}
echo "<pre>";
print_r(del([1, 2, 3, 4, 5, 6, 1],1));
echo "</pre>";