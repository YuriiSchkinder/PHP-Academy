<?php
$str="/mother has come.they said, summer would be very hot. anyone can do that";
function upcase($string){
    $j=1;
    for($i=0;$i<=strlen($string)-1;$i++) {
        if ($j == 1&& $string[$i]>='a'&& $string[$i]<='z') {
            $string[$i] = ucfirst($string[$i]);
            $j = 0;
        }elseif($string[$i]=='.'){
            $j=1;
        }
    }
    return $string;
}

echo upcase($str) ;



?>