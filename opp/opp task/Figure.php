<?php
class figure{
    const a=3;
    public $area;
    public function infoAbout(){
        echo "Это геометрическая фигура!";
    }

}
class  Rectangle extends figure{
    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    private $a;
    private $b;
    public function getArea(){
        return 0.5*$this->a*$this->b;
    }
}
class  Triangle extends figure{
    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    private $a;
    private $b;
    private $c;
    public function getArea(){
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
}
class  Square extends figure
{
    public function __construct($a)
    {
        $this->a = $a;
    }

    const SIDES_COUNT = 4;
    private $a;
    public function getArea(){
        return $this->a*$this->a;
    }
}
$Triangle= new Triangle(2,2,2);
echo $Triangle->getArea();
?>