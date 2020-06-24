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
    <input type="number" name="a" placeholder="input a">
    <input type="number" name="b" placeholder="input b">
    <input type="number" name="c" placeholder="input c">
    <input type="submit" value="Calculator">
</form>
<?php
include("calculator.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $pt = new QuadraticEquation();
    if ($a != 0) {
        if ($pt->getDiscriminant() < 0) {
            echo "pt vo nghiem";
        } else {
            $pt->setA();
            $pt->setB();
            $pt->setC();
            echo "nghiem 1 cua phuong trinh " . $pt->getRoot1();
            echo "<br>";
            echo "nghiem 2 cua phuong trinh " . $pt->getRoot2();
        }
    } else {
        echo "ban giai pt bac nhat";
    }


}

?>

</body>
</html>

