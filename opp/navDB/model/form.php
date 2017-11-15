<?php
require_once '../controller/Database.php';
require_once '../controller/RecordDB.php';
$tab= new RecordDB();
$tabdata= new Database();
if(isset($_GET['insert']) ) {
    $result=$tabdata->select($_GET['insert']);
    echo "<form action='../view.php?tables={$_GET['insert']}' method='post'>";
    foreach ($result[0] as $key=>$value){
        echo "<p>$key";
        echo "<input type='text' name='$key'>";
        echo "</p>";
    }
        echo "<input type='submit' value='add' >";
   echo " </form>";
}
if(isset($_GET['update'])){
    $result=$tab->select($_GET['tables'],$_GET['update']);
    echo "<form action='../view.php?tables={$_GET['tables']}&update={$_GET['update']}' method='post'>";
    foreach ($result[0] as $key=>$value){
        echo "<p>$key";
        echo "<input type='text' name='$key' value='$value'>";
        echo "</p>";
    }
    echo "<input type='submit' value='add' >";
    echo " </form>";
}
?>