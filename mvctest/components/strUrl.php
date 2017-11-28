<?php
class strUrl{
    public   $ControllerName;
    public   $MethodName;
    public function __construct()
    {
        $arr_url = explode('/', trim(strtolower($_SERVER['REQUEST_URI']), '/'));
        if (isset($arr_url)) {
            if (count($arr_url) >= 2) {
                $this->ControllerName = $arr_url[0] . 'Controller';
                $this->MethodName = $arr_url[1] . 'Method';
            } elseif(!empty($arr_url[0])) {
                $this->ControllerName = $arr_url[0] . 'Controller';
            }
        }
    }
}