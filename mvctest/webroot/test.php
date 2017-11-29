<?php
error_reporting(E_ALL);

class newClass{
    public $a=10;
    public $b=20;
    private $c=10;

}
$b= new newClass();
foreach ($b as $key=>$value){
    echo "$value ";
}
?>