<?php
class db{
    public static function conectDB(){
     $dsn="mysql:host=localhost; dbname=task_sql";
     $db= new PDO($dsn,'root','');
     $db->exec('set names utf8');
     return $db;
    }
}
?>