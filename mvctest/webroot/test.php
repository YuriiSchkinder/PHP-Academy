<?php
error_reporting(E_ALL);

class MyClass{
    public static function who(){
        echo __CLASS__;
    }
    public static function test(){
        self::who();
    }
}
class MyNewClass extends MyClass{
    public static function who()
    {
        echo __CLASS__;
    }
}
MyNewClass::test();
?>