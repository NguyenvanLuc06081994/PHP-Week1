<?php


class Shape2
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