<?php

class Application
{
    private $name;

    public function getName()
    {
        return $this->name;
    }
    public static $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __tooString()
    {
        return " Application name : ". $this->name;
    }
}