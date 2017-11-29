<?php
error_reporting(E_ALL);

class Bar{
    private $a=false;
    public $c=true;

}
$x=(array) new Bar();
echo array_key_exists('a', $x)? 'true':'false'; echo '-';
echo array_key_exists('c', $x)? 'true':'false';
?>