<p><a href="form.php">Форма загрузи документів</a></p>
<?php
function gallery($a)
{
    $arr_d = scandir($a);
    foreach ($arr_d as $value) {
        if ($value != '.' && $value != '..') {
            if ($a == 'img') {
                $src = $a . '/' . $value;
                echo "<img src='$src' width='100px' height='100px'>";
            }else{
               echo "<br>".$value;
            }
        }
    }
    echo "<br>";
}
$arr=scandir(__DIR__);
foreach ($arr as $value){
    if($value!='.'&&$value!='..'&&is_dir($value)){
            if($value=='img') {
                gallery('img');

            }
            if($value=='doc'){
                gallery('doc');
            }

    }
}

?>