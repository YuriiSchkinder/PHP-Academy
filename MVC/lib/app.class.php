<?php
class App{
    protected static $router;
    public static $db;
    public static function getRouter(){
        return self::$router;
    }
    public static function run($uri){
        self::$router= new Router($uri);
        self::$db=new DB(Config::get('db.host'),Config::get('db.root'),Config::get('db.password'),Config::get('db.name'));
        Lang::load(self::$router->getLanguages());
        $controller_class=ucfirst(self::$router->getController()).'Controller';
        $comtroller_method=strtolower(self::$router->getMethotdPrefix().self::$router->getAction());
        $controller_object= new $controller_class;
        if(method_exists($controller_object,$comtroller_method)){
            $view_path=$controller_object->$comtroller_method();
            $view_object= new View($controller_object->getData(),$view_path);
            $content=$view_object->render();
        }else{
            throw new Exception('METHOD ERROR'.$comtroller_method);
        }
        $layout=self::$router->getRoute();
        $layout_path=VIEWS_PATH.DS.$layout.'.php';
        $layout_view_object= new View(compact('content'),$layout_path);
        echo $layout_view_object->render();
    }
}