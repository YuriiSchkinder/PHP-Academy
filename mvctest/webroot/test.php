<?php
abstract class myBaseClass{
    abstract protected function doSome();
    function theree(){
        return ".....";
    }
}
class myBase extends myBaseClass{
    protected function doSome() {
        echo $this->theree();
}
}
$a=new myBase();
$a->doSome();
?>