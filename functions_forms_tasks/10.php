
<form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <input type="text" name="world" title="">
    <input type="submit" value="Send form">
</form>
<?php
function world($a){
$arr_w=explode(' ',$a);
$arr=[];
foreach ($arr_w as $key=>$val1){
    foreach ($arr_w as $key1=>$val2) {
        if($val1==$val2){
            if(!isset($arr[$val2])){
                $arr[$val2]=1;
            }else{
                $arr[$val2]++;
            }
            unset($arr_w[$key1]);
        }
    }

    }
return $arr;
}
$foo=world($_POST['world']);
foreach ($foo as $key=> $value){
    echo "$key=>$value </br>";
}
?>