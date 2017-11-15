<?php
require_once 'Database.php';
class RecordDB extends Database
{
public function select($tables,$where)
{
    $a = strrpos($where, '_');
    $str = substr($where, 0, $a) . '=' . "'" . substr($where, $a + 1) . "'";
    $res=$this->db->prepare("SELECT * FROM {$tables} WHERE {$str}");
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}
}