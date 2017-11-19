<?php
class table{
    public $db;
   public function __construct()
    {
        $host='localhost';
        $dbname='task_sql';
        $name='root';
        $pas='';
        $dsn="mysql:host=$host; dbname=$dbname";
        $db= new PDO($dsn,$name,$pas);
        $db->exec('set names utf8');
        $this->db=$db;
    }
    public function getBook(){
       $sql=$this->db->prepare('SELECT * FROM books');
       $sql->execute();
       $res=$sql->fetchAll(PDO::FETCH_ASSOC);
       return $res;
    }

}
