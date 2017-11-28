<?php
function __autoload($className)
{
    $arr_path = ['components', 'controllers', 'views', 'models'];
    foreach ($arr_path as $val) {
        $path = ".." . DIRECTORY_SEPARATOR . $val . DIRECTORY_SEPARATOR . $className . '.php';
        if (is_file($path)) {
            require_once $path;
        }
    }
}

?>