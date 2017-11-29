<?php
error_reporting(E_ALL);

trait Useful{
    private $prop=Null;
    public function increment(){
        $this->prop++;
    }
    public function getValue(){
        return $this->prop;
    }
}
class MyClass{
    use Useful;
    public function incrementNew()
    {
        $this->increment();
        $this->prop++;
    }
}
$c= new MyClass();
$c->incrementNew();
var_dump($c->getValue());
?>