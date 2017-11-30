<?php
error_reporting(E_ALL);

class Foo{
    public static $my_st='foo';
}
class Bar extends Foo{
    public function fooStatic(){
        return parent::$my_st;
    }
}
$foo= new Bar();
$foo->my_st= 'Bar';
echo $foo->fooStatic();
?>