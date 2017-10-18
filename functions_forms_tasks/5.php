<?php
function dirr($a,$b){
    $str=$a.$b;
    $arr=glob($str);
    foreach ($arr as $val){
        echo str_replace($a,'',$val)."<br>";
    }
}
$foo='../arrays_loops_tasks/';
if(is_dir($foo)){
    $val='*5.php';
    dirr($foo,$val);
}else{
    echo "Вкажіть коректно директорії";
}

?>