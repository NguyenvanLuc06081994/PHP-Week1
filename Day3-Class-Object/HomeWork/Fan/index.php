<?php
include "fan.php";
echo "Quat 1";
echo "<br>";
$fan1 = new Fan();
$fan1-> setSpeed($fan1::fast);
$fan1-> setColor("yellow");
$fan1 -> setRadius(10);
$fan1->turnOn();
$fan1 -> toString();
$fan1 ->turnOff();
$fan1 -> toString();
echo "<br>";
echo "Quat 2";
echo "<br>";
$fan2 = new Fan();
$fan2 -> setSpeed($fan2::medium);
$fan2 -> toString();
