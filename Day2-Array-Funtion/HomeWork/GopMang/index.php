<?php
function addArray($arr1,$arr2){
    $arrNew = [];
    for ($i = 0; $i < count($arr1); $i++) {
        array_push($arrNew,$arr1[$i]);
    }
    for ($i = 0; $i < count($arr2); $i++) {
        array_push($arrNew,$arr2[$i]);
    }
    return $arrNew;
}
var_dump(addArray([1,2,3],[4,5,6]));