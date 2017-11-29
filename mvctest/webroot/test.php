<?php
error_reporting(E_ALL);
class C{
    public $x=1;
    function __construct()
    {

        ++$this->x;
    }
    function __invoke()
    {

        return ++$this->x;
    }
    function __toString()
    {

        return (string) --$this->x;
    }

}
$obj= new C();
echo $obj();
?>