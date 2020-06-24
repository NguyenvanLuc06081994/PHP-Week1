<?php
include "watch.php";
$time = new StopWatch();
 $time -> start();
 echo $time -> getStartTime();
 $time->stop();
 echo $time -> getElapsed();