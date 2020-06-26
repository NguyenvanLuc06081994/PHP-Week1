<?php
include_once "Point.php";
include_once "MovablePoint.php";
$point = new Point(2,5);
$point->toString();
$move = new MovablePoint(1, 5, 3,6);
$move->move();
$move->toString();