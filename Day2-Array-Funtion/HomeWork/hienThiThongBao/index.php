<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="number" placeholder="Input index">
    <input type="number" name="number1" placeholder="input number of array">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $index = $_POST['number'];
    $number = $_POST['number1'];
    function arr($number, $index)
    {
        $arr = [];
        for ($i = 0; $i < $number; $i++) {
            $arr[$i] = rand(0, 100);
        }
        if ($index < 0 || $index > $number) {
            echo "Vuot qua gioi han cua mang";
        }else{
            echo $arr[$index];
        }

    }

    arr($number, $index);
}
?>
</body>
</html>