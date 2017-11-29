<?php
error_reporting(E_ALL);

class Foo {
    public static $cnt=0;
    public function foo(){
        ++self::$cnt;
    }
    function __construct()
    {
        ++self::$cnt;
    }
}
$f=new Foo;
$d=$f;
$c= clone $d;
$f->foo();
$d->foo();
$c->foo();
echo Foo::$cnt;
?>