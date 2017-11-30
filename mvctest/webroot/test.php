<?php
error_reporting(E_ALL);

class Bar{
    private $a='b';
    public $c='d';
}
$x=(array) new Bar();
echo array_key_exists('a',$x) ? 'true': 'false';
echo '-';
echo array_key_exists('c',$x) ? 'true': 'false';
?>