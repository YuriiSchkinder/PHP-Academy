<?php
function dirr($a){
$arr_dir=scandir($a);
foreach ($arr_dir as $value){
    echo $value."<br>";
}
}
dirr('../arrays_loops_tasks');
?>