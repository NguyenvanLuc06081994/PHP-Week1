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
    <input type="number" name="number" placeholder="input position of col">
    <input type="submit" value="Submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $number = $_POST['number'];
        function sumCol($arr,$number){
            $sum = 0;
            for ($i = 0; $i < count($arr); $i++) {
                if ($number <= count($arr[$i])){
                    $sum += $arr[$i][$number];
                }else{
                    echo "So cot ban yeu cau qua lon";
                    return ;
                }
            }
            return $sum;
        }
        echo sumCol([[1,2,3],[1,2,3],[1,2,3]], $number);
    }
?>
</body>
</html>
