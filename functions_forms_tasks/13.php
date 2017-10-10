<?php
$str = 'слива яблоко слива слива слива вишня черешня яблоко вишня яблоко вишня вишня слива вишня слива';
function sum($string){
$arr=explode(' ',$string);
$sum=[];
foreach ($arr as $key1=>$val1){
    foreach ($arr as $key2=>$val2){
        if ($val1==$val2){
            if(!isset($sum[$val1])){
                $sum[$val1]=1;
            }else
            {
                $sum[$val1]++;
            }
            unset($arr[$key2]);
        }
    }
}
return $sum;
}
$foo=sum($str);
asort($foo);
$foo=array_reverse($foo);
print_r($foo);
?>