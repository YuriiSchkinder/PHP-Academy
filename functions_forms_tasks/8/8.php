<?php
$fp=fopen('coment.txt','a+');
$key=0;
$arr_x=['xxx','yyy','zzz'];
if(isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['comment'])){
        if(!in_array($_POST['name'],$arr_x)&&!in_array($_POST['comment'],$arr_x)){
            $str=strip_tags("Імя: ".$_POST['name']."\n"."Коментарій: ".$_POST['comment']."\n",'&gt&lt');
            fwrite($fp,$str);
        }else{
            $key=2;
        }
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
if($key==2){
    echo "<br>Некоректний коментарій<br>";
}
fclose($fp);
?>
<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
    <p>Ваше імя:<input type="text" name="name"></p>
    <p>Коментарій:<input type="text" name="comment"></p>
    <p><input type="submit" name="submit" value="Send comment"></p>
</form>