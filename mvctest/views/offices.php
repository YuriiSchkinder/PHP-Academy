<?php
foreach ($offices as $office){
    foreach ($office as $of){
        $url='office'.DIRECTORY_SEPARATOR.'select'.DIRECTORY_SEPARATOR.$of;
        echo "<a href=$url>$of</a><br>";
    }
}
var_dump($_GET);
?>