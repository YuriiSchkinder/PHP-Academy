<?php
error_reporting(E_ALL);

abstract class AbstractClass{
    abstract protected function prefix($name);
}
class Concrete extends AbstractClass{
    public function prefix($name,$value=' ')
    {

    }
}
?>