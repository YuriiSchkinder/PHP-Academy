<?php
class DB{
    protected  $connection;
    public function __construct()
    {
        $dsn="mysql:host=localhost; dbname=mvc";
        $this->connection=new PDO($dsn,'root','');
        $this->connection->exec('set names utf8');
    }
    public  function query($sql){
        if (!$this->connection){
            return false;
        }
        $result=$this->connection->query($sql);
        if($result){
            return true;
        }


    }
}
?>