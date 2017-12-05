<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(dirname(__FILE__)));
define('VIEWS_PATH',ROOT.DS.'views');
require_once ROOT.DS.'lib'.DS.'init.php';
$controller=new UserController();
$controller->register();
?>