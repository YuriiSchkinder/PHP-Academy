<?php
error_reporting(E_ALL);

class newClass{
    public static $props= [];
    static function __set($n,$v){
        self::$props[$n]=$v;
    }
}
newClass::__set('prop','value');
print_r(newClass::$props);
?>