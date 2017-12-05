<?php
function __autoload($class_name){
    $lib_path=ROOT.DS.'lib'.DS.strtolower($class_name) .'.php';
    $controllers_path=ROOT.DS.'controllers'.DS.str_replace('controller','',strtolower($class_name)).'.controller.php';
    $model_path=ROOT.DS.'models'.DS.str_replace('model','',strtolower($class_name)).'.model.php';
    if(file_exists($lib_path)){
        require_once $lib_path;
    }elseif (file_exists($controllers_path)){
        require_once $controllers_path;
    }elseif(file_exists($model_path)){
        require_once $model_path;
    }else{
        throw new Exception('AUTOLOAD ERROR');
    }
}
?>