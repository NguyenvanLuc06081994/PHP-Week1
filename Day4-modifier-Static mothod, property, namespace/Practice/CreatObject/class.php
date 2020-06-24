<?php
class Application1{
    private static $instance = 10;
    public static function say(){
        echo "hello";
    }
    public static function getInstance(){
        if (self::$instance === null){
            self::$instance = new Application1();
        }
        return self::$instance.self::say() ;
    }
}