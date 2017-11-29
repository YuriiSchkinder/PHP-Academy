<?php
error_reporting(E_ALL);
class C{
    protected $x=array();
 public function &getX(){
     return $this->x;
 }

}
$obj= new C();
array_push($obj->getX(),'one');
array_push($obj->getX(),'two');
echo count($obj->getX());
?>