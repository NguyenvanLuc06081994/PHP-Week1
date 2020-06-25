<?php

class Circle1
{
    protected $name;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    protected $radius;
    protected $color;

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function __construct($name, $radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->name = $name;
    }

    public function getArea()
    {
        return $this->radius ** 2 * pi();
    }

    public function getPerimeter()
    {
        return $this->radius * 2 *pi();
    }

    public function toString()
    {
        echo "$this->name co ban kinh la: $this->radius va co mau $this->color";
    }
}

class Cylinder1 extends Circle1
{
    public $height;

    public function __construct($name, $radius, $color, $height)
    {
        parent::__construct($name, $radius, $color);
        $this->height = $height;
    }

    function toString()
    {
        echo "$this->name co ban kinh la: $this->radius va co mau $this->color va co chieu cao la $this->height";
    }

    public function getVolume()
    {
        return Circle1::getPerimeter() * $this->height + Circle1::getArea()*2;
    }

}