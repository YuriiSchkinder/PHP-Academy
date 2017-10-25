<?php
function dirToArray($dir) {
    $result = array();
    $cdir = scandir($dir);
    foreach ($cdir as $key => $value)
    {
        if (!in_array($value,array(".","..")))
        {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
            {
                $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
            }
            else
            {
                $result[] = $value;
            }
        }
    }
    return $result;
}

$arr_dir=dirToArray(__DIR__);

echo "<table>";
if(!isset($_GET['n_dir'])){

    foreach ($arr_dir as $dir=>$file) {
        echo "<tr>";
        if (is_dir($dir)) {
            if (!empty($file)) {
                echo "<td><a href='?n_dir=$dir'>$dir</a></td>";
                echo "<td><a href='form.php?r_dir=$dir'>Переіменувати_$dir</a></td>";
            } else {
                echo "<td>$dir-(пуста папка)</td>";
                echo "<td><a href='form.php?r_dir=$dir'>Переіменувати_$dir</a></td>";
                echo "<td><a href='?d_dir=$dir'>Видалити_$dir</a></td>";
            }
        } else {
            echo "<td>$file</td>";
            echo "<td><a href='?rw_dir=$dir'>Редагувати_$file</a></td>";
        }
        echo "</tr>";
    }
}elseif(array_key_exists($_GET['n_dir'],$arr_dir)) {
    $s=$_GET['n_dir'];
    foreach ($arr_dir[$_GET['n_dir']]as $dir1 => $file1) {
        echo "<tr>";
        if(empty($file1)){
            echo "<td>$dir1-(пуста папка)</td>";
            echo "<td><a href='form.php?r_dir=$s'>Переіменувати_$dir1</a></td>";
            echo "<td><a href='?n_dir=$s&d_dir=$dir1'>Видалити_$dir1</a></td>";
        }
        echo "</tr>";
    }
    echo "<td><a href='index.php'>Назад</a></td>";
}
echo "</table>";
if(isset($_GET['n_dir']) ){
    if (isset($_GET['d_dir']) && array_key_exists($_GET['d_dir'], $arr_dir[$_GET['n_dir']])) {
        chdir($_GET['n_dir']);
        echo getcwd();
        rmdir($_GET['d_dir']);
        $str_rl=$_SERVER['REQUEST_URL'];
        header("Location: http://$str_rl");
    }
}elseif(isset($_GET['d_dir'])&&array_key_exists($_GET['d_dir'], $arr_dir)){
    $str_rl=$_SERVER['REQUEST_URL'];
    rmdir($_GET['d_dir']);
    header("Location: http://$str_rl");
}
if(isset($_GET['rename'])&&array_key_exists($_GET['r_dir'], $arr_dir)){
    echo $_GET['r_dir'];
    rename($_GET['r_dir'],$_GET['rename']);
    $str_rl=$_SERVER['REQUEST_URL'];
    header("Location: http://$str_rl");
}
?>