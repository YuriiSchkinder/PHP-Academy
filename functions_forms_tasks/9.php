<?php
if($_SERVER['REQUEST_METHOD']=='GET'){ ?>
    <form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post">
        <input type="text" name="revers">
        <input type="submit" value="Sent form">
    </form>
<?php }else{
    echo strrev($_POST['revers']);
}
?>