<?php
error_reporting(E_ALL);

class NewClass{
    public $val='some';
    public function &getValue(){
        return $this->val;
    }
}
$obj=new NewClass();
$myVal= &$obj->getValue();
$obj->val=2;
echo $myVal;
?>