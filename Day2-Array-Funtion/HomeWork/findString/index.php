<?php
function findStr($str , $x){
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $x){
            $count++;
        }
    }
    return $count;
}
echo findStr("tungxikex", "x");