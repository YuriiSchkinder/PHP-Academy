<?php
class Database
{
    public $db;
    function __construct()
    {
        $dsn = 'mysql:host=localhost; dbname=task_sql';
        $db = new PDO($dsn, 'root', '');
        $db->exec('set names utf8');
        $this->db=$db;
    }
    public  function show()
    {
        $res = $this->db->query('SHOW TABLES');
        return $res->fetchAll(PDO::FETCH_ASSOC);

    }
    public function select($tables)
    {
        $res=$this->db->prepare("SELECT * FROM {$tables} ");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);

    }    public function insert($table,$values)
    {
        $str = "INSERT INTO $table VALUES (";
        foreach ($values as $key=>$val){
            $str .= ":$key,";
            $arr[":$key"]=$val;
        }
        $sql=rtrim($str,',').')';
        $res=$this->db->prepare($sql);
        $res->execute($arr);
    }
    public function update($table,$value,$where)
    {
        $a = strrpos($where, '_');
        $str = substr($where, 0, $a) . '=' . "'" . substr($where, $a + 1) . "'";
        $sql="UPDATE  {$table} SET ";
        foreach ($value as $key=>$val){
            $sql .= $key.'='."'".$val."',";
        }
        $sql=rtrim($sql,',')." WHERE {$str}";
        $res = $this->db->prepare($sql);
        $res->execute();
    }
    public function delete($table,$where = null)
    {
        $a = strrpos($where, '_');
        $str = substr($where, 0, $a) . '=' . "'" . substr($where, $a + 1) . "'";
        $res = $this->db->prepare("DELETE FROM {$table} WHERE {$str}");
      $res->execute();
    }
}
