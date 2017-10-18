<?php
$str="a Васька слушает да ест. a воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. a король-то — голый. a ларчик просто открывался.a там хоть трава не расти.";
function upcase($string){
    $j=1;
    for($i=0;$i<=strlen($string)-1;$i++) {
        if ($j == 1&& $string[$i]>='a'&& $string[$i]<='z') {
            $string[$i] = strtoupper($string[$i]);
            $j = 0;
        }elseif($string[$i]=='.'){
            $j=1;
        }
    }
    return $string;
}

echo upcase($str) ;



?>