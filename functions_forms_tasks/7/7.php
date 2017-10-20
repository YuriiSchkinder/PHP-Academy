<?php
$fp=fopen('coment.txt','a+');
$key=0;
if(isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['comment'])){
        $str="Імя: ".$_POST['name']."\n"."Коментарій: ".$_POST['comment']."\n";
        fwrite($fp,$str);

    }else{
        $key=1;
    }
}
$arr_w=file('coment.txt');
foreach ($arr_w as $value){
    echo $value."<br>";
}
if($key==1){
    echo "<br>Заповніть всі поля<br>";
}
fclose($fp);
?>
<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
    <p>Ваше імя:<input type="text" name="name"></p>
    <p>Коментарій:<input type="text" name="comment"></p>
    <p><input type="submit" name="submit" value="Send comment"></p>
</form>