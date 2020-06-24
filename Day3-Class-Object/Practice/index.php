
<?php
include ("Retangle.php");
$width = 10;
$height = 20;
$rectangle = new Rectangle($width,$height);
$rectangle -> display();
echo "<br>";
echo "dien tich la : ". $rectangle -> getArea(). "<br>";
echo "chu vi la :". $rectangle -> getPerimeter();
