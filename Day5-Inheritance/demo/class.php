<?php
class A{
    public $some_property;

    function some_method(){
        echo "This method is defined inside class A";
    }
}
class B extends A{
    public $some_other_property;

    function some_other_method(){
        echo "oanh beo";
    }

}