<?php
class DB{
    protected $connection;
    public function __construct($host,$user,$password,$db_name)
    {
        $dsn="mysql:host={$host}; dbname={$db_name}";
        $this->connection=new PDO($dsn,$user,$password);
        $this->connection->exec('set names utf8');
    }
    public function query($sql){
        if (!$this->connection){
            return false;
        }
        $result=$this->connection->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>