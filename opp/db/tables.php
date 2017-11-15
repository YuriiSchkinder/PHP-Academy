<?php
require_once 'models\db.php';
require_once 'models\table.php';
class tables{
    public function getNewRecord(table $record)
    {
        $db = db::conectDB();
        $str = "INSERT INTO offices (";
        foreach ($record as $key=>$val){
            $str .= "$key,";
        }
        $sql=rtrim($str,',').') VALUES (';
        $str='';
        foreach ($record as $key=>$val){
            $str .= ":$key,";
        }
        $sql.=rtrim($str,',').')';
        $res=$db->prepare($sql);
        foreach ($record as $key=>$val){
           $res->bindParam(":$key",$val,PDO::PARAM_STR);
        }
        $res->execute();
        echo $sql;


    }
    public static function createTab(){
        $db=db::conectDB();
        $sql_create='SELECT * FROM offices';
        $res=$db->prepare($sql_create);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
$data= new tables();
$dataRecord=new table();
$dataRecord->createTable($_POST);
try{
    $data->getNewRecord($dataRecord);
}catch (Exception $e){
    echo $e->getMessage();
}
?>