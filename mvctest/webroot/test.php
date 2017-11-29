<?php
error_reporting(E_ALL);

class MyClass{
    static function muName(){
        return __METHOD__;
    }
}
print MyClass::muName();
?>