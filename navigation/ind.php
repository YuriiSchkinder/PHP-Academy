<?php
function dirToArray($dir)
{
    $result = array();
    $cdir = scandir($dir);
    foreach ($cdir as  $value) {
        if (!in_array($value, array(".", ".."))) {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                  $result[$value]=  dirToArray($dir . DIRECTORY_SEPARATOR . $value);

            }else {
                $result[$value] =  $value;
            }

        }
    }
return $result;
}
function arr($a){
    $rw=[];
    foreach ($a as $dir=>$item){
        if(is_array($item)&&(count($item)>0)){
            $rw[]=arr($item);
        }else{
            $rw[]=$dir;
        }

    }
    return $rw;
}
$i=0;
$arr_dir=[];
$rw=[];
$arr=dirToArray('.');
echo "<pre>";
//print_r($arr);
echo "<pre>";
foreach ($arr as $dir=>$item){
    if(is_array($item)&&(count($item)>0)){
        $rw[]=arr($item);
    }else{
        $arr_dir[]=$dir;
    }
    $arr_dir[]=$rw;
}
echo "<pre>";
print_r($arr_dir);
echo "<pre>";
?>