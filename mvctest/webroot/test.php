<?php
error_reporting(E_ALL);

class V{
    public $val;
}
function render(V $a){
    if($a){
        echo $a->val;
    }
}
render(null);
?>