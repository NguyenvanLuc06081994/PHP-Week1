<?php


class Point
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

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $arr = [];
        array_push($arr, $this->x, $this->y);
        return $arr;
    }

    public function toString()
    {
        echo "<pre>";
        print_r($this->getXY());
        echo "</pre>";
    }

}
