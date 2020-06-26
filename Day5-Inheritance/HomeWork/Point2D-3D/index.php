<?php
include_once "class.php";
$point2d = new Point2D(1,2);
echo "<pre>";
print_r($point2d->getXY()) ;
echo "</pre>";
$point3d = new Point3D(2,3,10);
echo "<pre>";
print_r($point3d->getXYZ()) ;
echo "</pre>";

