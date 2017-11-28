<?php
require_once "../components/autoload.php";
$a=new strUrl;
try{
    $controller=new $a->ControllerName($a->MethodName);
}catch (Exception $e){
    echo $e->getMessage();
}
?>