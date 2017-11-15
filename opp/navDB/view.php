<?php
require_once 'controller/Database.php';
$tab= new Database();
$result=$tab->show();
echo "<table>";
if(!isset($_GET['tables'])) {
    foreach (array_values($result) as $key) {
        foreach ($key as $val) {
            echo "<tr>";
            echo "<td><a href=?tables=$val>$val</a></td>";
            echo "</tr>";
        }
    }
}else{
    echo "<a href=model/form.php?insert={$_GET['tables']}>INSERT INTO</a>";
    if(isset($_POST) and !empty($_POST)){
        $tab->insert($_GET['tables'],$_POST);
    }
    if( isset($_GET['where'])) {
        $tab->delete($_GET['tables'],$_GET['where']);
    }
    if(isset($_GET['update'])) {
        $tab->update($_GET['tables'],$_POST,$_GET['update']);
    }
    $res=$tab->select($_GET['tables']);
    echo "<tr>";
    echo "<td><td> </td> </td>";
    foreach ($res[0] as $key=>$value){
        echo "<td> $key </td>";
    }
    echo "</tr>";
    for($i=0;$i<count($res);$i++) {
        $str= key($res[$i])."_".current($res[$i]);
        echo "<tr>";
        echo "<td><a href=model/form.php?tables={$_GET['tables']}&update={$str}>Редагувати</a></td>";
        echo "<td><a href=?tables={$_GET['tables']}&where={$str}>DELETE</a></td>";
        foreach ($res[$i] as $val) {
            echo "<td>$val</td>";
        }
        echo "<tr>";
    }
}
echo "</table>";
?>