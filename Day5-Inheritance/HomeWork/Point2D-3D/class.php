<?php

class Point2D
{
    protected $x;
    protected $y;

    public function getX()
    {
        return $this->x;
    }

    public function setX($x): void
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y): void
    {
        $this->y = $y;
    }

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

    }

    public function SetXY($x,$y)
    {
      $this->x = $x;
      $this->y =$y;

    }

    public function getXY()
    {
        $arr= [];
        array_push($arr,$this->x,$this->y);
        return $arr;

    }
}

class Point3D extends Point2D
{
    protected $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z): void
    {
        $this->z = $z;
    }

    public function setXYZ($x,$y,$z)
    {
       parent::setXY($x,$y);
       $this->z =$z;

    }

    public function getXYZ()
    {
        $arr = parent::getXY();
        array_push($arr,$this->z);
        return $arr;

    }
}