<?php
error_reporting(E_ALL);

class object{
    function object($entity){
        $entity->name='John';
    }
}
class Entity{
    var $name='Maria';
}
$entity= new Entity();
$obj= new object($entity);
print $entity->name;
?>