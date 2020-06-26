<?php

include_once "Point.php";
class MovablePoint extends Point{
    protected $xSpeed;

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }
    protected $ySpeed;

    public function __construct($x,$y,$xSpeed,$ySpeed)
    {
        parent::__construct($x,$y);
        $this->xSpeed= $xSpeed;
        $this->ySpeed= $ySpeed;
    }

    public function setSpeed($xSpeed,$ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        $arr = parent::getXY();
        $arr1 = [];
        array_push($arr1,$this->xSpeed,$this->ySpeed);
        $arr2 = [];
        array_push($arr2 ,$arr, $arr1 );
        return $arr2;

    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        parent::getXY();
    }

    public function toString()
    {
        echo "<pre>";
        print_r($this->getSpeed());
        echo "</pre>";

    }



}