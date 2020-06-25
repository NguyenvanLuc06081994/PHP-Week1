<?php
include_once "circle.php";
$circle = new Circle1("circle",10,"red");
$circle->getArea();
$circle->getPerimeter();
$circle->toString();
$cylinder= new Cylinder1("cylinder",10,"yellow",30);
$cylinder->getVolume();
$cylinder->toString();