<?php
if($_SERVER['REQUEST_METHOD']=="GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
    <textarea name="name" >hgdhn</textarea>
    <input type="submit" value="Send Form">
    </form>
<?php } else {
    function world_top($a){
        $arr_world=explode(' ',$a);
        $arr=[];
        foreach ($arr_world as $val){
            $arr[$val]=strlen($val);
        }
        asort($arr);
       $rez=array_slice($arr,count($arr)-3);

        return $rez;
    }
    $foo=world_top($_POST['name']);
    print_r($foo);
}
?>