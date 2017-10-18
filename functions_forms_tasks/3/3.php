<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
    <p>Ведіть кількість символів:</p>
    <input type="text" name="lenght" alt="">
    <input type="submit" value="Send">
</form>
<?php
$fp=fopen('3.txt','a');
$world=file_get_contents('3.txt');
$arr_w=explode(' ',$world);
if(filter_var($_POST['lenght'],FILTER_VALIDATE_INT)) {
    $world = '';
    foreach ($arr_w as $key => $val) {
        if (iconv_strlen($val) <= $_POST['lenght']) {
            $world .=$val. ' ';
        }
    }
}else {
    echo "Ведіть коректне число символів";
}
if($world!='') {
    ftruncate($fp, 0);
}
$test=fwrite($fp,$world);
if($test){
    echo "дані записались";
}else{
    echo "помилка запису";
}
fclose($fp);
?>