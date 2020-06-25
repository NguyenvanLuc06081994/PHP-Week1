<?php
include_once("Shape.php");

$shape = new Shape("Earth");
echo $shape->show() . "<br>";
$circle = new Circle("Circle", 10);
echo $circle->show() . "<br>";
echo $circle->calculateArea() . "<br>";
$cylinder = new Cylinder('Cylinder', 10, 20);
echo $cylinder->show();
echo $cylinder->calculateVolume() . "<br>";
$rectangle = new Rectangle1("rectangle",10,20);
echo $rectangle->show(). "<br>";
echo $rectangle->calculateArea(). "<br>";
echo $rectangle->calculatePerimeter(). "<br>";