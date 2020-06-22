<?php
//$age = array("Peter"=>"34", "Ben"=>"37", "Joe"=>"43");
//foreach($age as $key => $values) {
////    echo $values. "<br>";
//    echo $key."<br>";
//}

//$arr = ["b" ,"c" , "a"];
//$arr = array(3, 2, 3,6,9,7);
$arr = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
asort($arr);
foreach ($arr as $key => $value){
    echo "arr[$key] = " . $value . "<br>";
}