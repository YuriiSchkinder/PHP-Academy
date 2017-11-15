<?php
require_once 'tables.php';
$res=tables::createTab();
$arr=array_keys($res[0]);
echo "<form action='tables.php' method='post'><table>";
foreach ($arr as $val){
    echo "<tr>";
    echo "<td>Введіть $val:</td>";
    echo "<td><input type='text' name='$val' placeholder='$val'></td>";
    echo "</tr>";
}
echo "</table><input type='submit' value='Add'>";
echo "</form>";
?>
