<?php
$str='А Васька слушает да ест. А воз и ныне там.
 А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти';
function revers($string)
{
    $arr = explode(".", $string);
    $arr = array_reverse($arr);
    $string='';
    foreach ($arr as $val){
        $string.=$val.'. ';
    }
   return $string;
}
echo $str.'<br>';
echo revers($str);
?>