<?php
$fileName = "data.json";
$fileUsers = "users.json";
function readFileJson($fileName)
{
    $data = file_get_contents($fileName);
    return json_decode($data);
}

//print_r(readFileJson($fileName));
function saveFileJson($fileName, $arr)
{
    $data = json_encode($arr);
    file_put_contents($fileName, $data);


}

//$user = [
//        "name"=> "oppo",
//        "email"=> "nvluc0708@gmail.com",
//        "phone"=> "0963497275"];
//$users = readFileJson($fileName);
//array_push($users,$user);
//saveFileJson($fileName,$users);