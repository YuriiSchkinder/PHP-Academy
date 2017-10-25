<style type="text/css">
ul{
    display: inline-block;
}
a{
    float:right;
}
   .file  {
        margin: 0;
       padding: 0 15px;
       list-style: none;
       background-image: url("img/file.png");
        background-repeat: no-repeat;
        background-position: left top;
        background-size:  15px;
    }
   .folder   {
       margin: 0;
       padding: 0 15px;
       list-style: none;
       background-image: url("img/folder.png");
       background-repeat: no-repeat;
       background-position: left top;
       background-size:  15px;
   }
</style>
<?php
$path='.';
function createDir($path = '.')
{
    $arr_f=[];
    $arr=array_diff(scandir($path),array('.','..'));
    echo '<ul>';
    foreach ($arr as $dir){
        if (is_dir($path.'/'.$dir)){

               printCreateDir($path,$dir);
        }else{
            $arr_f[] = $dir;
        }
    }
    printFile($path,$arr_f);

    echo '</ul>';
}
function printFile($path,$arr_f){
    foreach ($arr_f as $dir){
        $str=$path.'/'.$dir;
        echo "<li class='file'>$dir<a href='?$str'> Видалити файл</a></li>";
    }
}
function printCreateDir($path,$dir){
    $str=$path.'/'.$dir;
    if ( count( scandir( $str ) ) <= 2 ){
    echo "<li class='folder'>$dir<a href='?$str'> Видалити папку</a></li>";
    }else{
        echo "<li class='folder'>$dir</li>";
    }
    createDir($path.'/'.$dir);
    echo '</li>';
}


createDir($path);

?>