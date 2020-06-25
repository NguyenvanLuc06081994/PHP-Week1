<?php

class Employee
{
    private $surname;
    private $name;
    private $birth;
    private $address;
    private $position;

    public function __construct($surname,$name,$birth,$address,$position)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->birth = $birth;
        $this->address = $address;
        $this->position = $position;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getBirth()
    {
        return $this->birth;
    }

    public function setBirth($birth): void
    {
        $this->birth = $birth;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }

//    public function getHtml()
//    {
//        $table = "<td>$this->surname </td>
//                  <td>$this->name</td>
//                  <td>$this->birth</td>
//                  <td>$this->address</td>
//                  <td>$this->position</td>";
//        return $table;
//    }
//
    public function edit($surname,$name,$birth,$address,$position)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->birth = $birth;
        $this->address = $address;
        $this->position = $position;

    }


}
