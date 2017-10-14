<?php
if($_SERVER['REQUEST_METHOD']=='GET'){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
    <textarea name="a">hhhhh</textarea>
    <textarea name="b">jjjjj</textarea>
    <input type="submit" value="Send form">
</form>
<?php
}else{
    function getCommonWords($a, $b){
        $arr_a=explode(' ', $a);
        $arr_b=explode(' ', $b);
        $arr=[];
        foreach ($arr_a as $key1=>$val1){
            foreach ($arr_b as $key2=>$val2) {
                if (!isset($arr[$val2])) {
                    if ($val1 == $val2) {
                        $arr[$val2] = $val1;
                    }
                }
            }

        }
        return $arr;
    }
    $foo= getCommonWords($_POST['a'],$_POST['b']);
    print_r($foo);
}
?>