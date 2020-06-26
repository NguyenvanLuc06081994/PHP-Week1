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
    <input type="text" name="side1" placeholder="side1">
    <input type="text" name="side2" placeholder="side2">
    <input type="text" name="side3" placeholder="side3">
    <input type="submit" value="Submit">
</form>
<?php
include_once "Shape.php";
include_once "Triangle.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    $side3 = $_POST["side3"];
    $shape = new Shape2("Hinh trom");
    $triangle = new Triangle($side1,$side2,$side3);
    $triangle->getPerimeter();
    $triangle->getArea();
    $triangle->toString();
}


?>
</body>
</html>
