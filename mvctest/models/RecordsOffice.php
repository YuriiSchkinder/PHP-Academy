<?php
class RecordsOffice{
    public $db;
    function __construct()
    {
        $dsn = 'mysql:host=localhost; dbname=task_sql';
        $db = new PDO($dsn, 'root', '');
        $db->exec('set names utf8');
        $this->db=$db;
    }
    public function showOffice(){
        $sql='SHOW TABLES';
        $res=$this->db->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    public function selectOffice($table, $where=NULL){
        if(is_null($where)){
            $sql="SELECT * FROM {$table}";
        }else{
            $sql="SELECT * FROM {$table} WHERE {$where}";
        }
        $res=$this->db->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($table,$value,$where)
    {
        $sql="UPDATE  {$table} SET ";
        foreach ($value as $key=>$val){
            $sql .= $key.'='."'".$val."',";
        }
        $sql=rtrim($sql,',')." WHERE {$where}";
        echo $sql;
        $res = $this->db->prepare($sql);
        $res->execute();
        return $this->selectOffice($table);
    }
    public function insertOffice($table,$values)
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
}
?>