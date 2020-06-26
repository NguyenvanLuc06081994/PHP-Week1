<?php

include_once "Shape.php";

class Triangle extends Shape2
{
    protected $side1 = 1;
    protected $side2 = 1;
    protected $side3 = 1;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getSide1(): int
    {
        return $this->side1;
    }

    public function setSide1(int $side1): void
    {
        $this->side1 = $side1;
    }

    public function getSide2(): int
    {
        return $this->side2;
    }

    public function setSide2(int $side2): void
    {
        $this->side2 = $side2;
    }

    public function getSide3(): int
    {
        return $this->side3;
    }

    public function setSide3(int $side3): void
    {
        $this->side3 = $side3;
    }

    public function getStatus()
    {
        if ($this->side1+$this->side2>$this->side3 &&$this->side2+$this->side3>$this->side1 &&$this->side1+$this->side3>$this->side2){
            return true;
        }else{
            return false;
        }
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea()
    {
        if ($this->getStatus() == true){
            $p = $this->getPerimeter() / 2;
            return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
        }else{
            echo "Day khong phai 1 tam giac";
        }

    }

    public function toString()
    {
        if ($this->getStatus()==true){
            echo "tam giac co 3 canh la : " . $this->getSide1() . "," . $this->getSide2() . "," . $this->getSide3();
            echo "<br>";
            echo "tam giac co dien tich la: " . $this->getArea();
        }

    }
}