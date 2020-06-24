<?php

class Fan
{
    const slow = 1;
    const medium = 2;
    const fast = 3;
    private $speed = self::slow;
    private $status = false;
    private $radius = 5;
    private $color = "blue";

    public function getSpeed()
    {
        return $this->speed;
    }


    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }


    public function isStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status = $status;
    }


    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }

    public function turnOn()
    {
        $this->setStatus(true);
    }

    public function turnOff()
    {
        $this->setStatus(false);
        $this->setSpeed(0);
    }

    public function toString()
    {
        if ($this->isStatus() === false) {
            echo "fan is off ". "toc do cua quat la ".$this->getSpeed(0). "<br>" ;
        } else {
            echo "fan is on <br>";
            echo "Mau cua quat la " . $this->getColor() . "<br>";
            echo "ban kinh cua quat " . $this->getRadius() . "<br>";
            echo "toc do cua quat " . $this->getSpeed() . "<br>";
        }


    }
}