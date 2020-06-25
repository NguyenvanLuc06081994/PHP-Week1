<?php


class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I am a shape, My name is $this->name";
    }
}
class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius ** 2 * pi();
    }

    public function calculatePerimeter()
    {
        return $this->radius * 2 * pi();
    }
}

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return Circle::calculatePerimeter() * $this->height + Circle::calculateArea()*2;
    }

    public function calculateVolume()
    {
        return Circle::calculateArea() * $this->height;
    }
}
class Rectangle1 extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $height, $width)
    {
        Shape::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}



