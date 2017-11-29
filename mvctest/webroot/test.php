<?php
class myexception extends Exception{

}
class myClass{
    function __destruct()
    {
        echo "закрива зєднення з базою";
        throw new Exception('Ошибка при транзакції');
    }
}
class myNewClass{
    function __destruct()
    {
        echo "закрива log";
        throw new myexception('Ошибка при log');
    }
}
try{
    $db=new myClass();
    $log=new myNewClass();
}catch (Exception $e){
    echo $e->getMessage();
}catch (Exception $m){
    echo $m->getMessage();
}
?>