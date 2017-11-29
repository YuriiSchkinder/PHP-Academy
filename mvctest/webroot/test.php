<?php
error_reporting(E_ALL);

abstract class Base {
    protected function __construct()
    {
    }
    public static function create(){
        return new static();
    }
    abstract function action();
}
class Item extends Base {
    public function action()
    {
     echo __CLASS__;   // TODO: Implement action() method.
    }
}
$item= Item::create();
$item->action();
?>