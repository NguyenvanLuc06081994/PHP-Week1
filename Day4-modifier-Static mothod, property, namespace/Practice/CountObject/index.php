<?php
include "class.php";
echo "Tong so doi tuong dem duoc la : ".Application::$count."<br>";
$app1 = new Application("flappy bird");
echo "Tong so doi tuong dem duoc la : ".Application::$count."<br>";
$app2 = new Application("brain out");
echo "Tong so doi tuong dem duoc la : ".Application::$count."<br>";
$app1->getName();
echo $app1 -> __tooString()."<br>";
echo $app2->getName() ."<br>";
