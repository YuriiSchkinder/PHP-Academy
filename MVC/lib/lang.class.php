<?php
class Lang {
    protected static $data;
    public static function load($lang_code){
        $lang_file_path=ROOT.DS.'lang'.DS.$lang_code.'.php';
        if(file_exists($lang_file_path)){
            self::$data=include $lang_file_path;
        }else{
            throw new Exception('Lang file not found');
        }
    }
    public  static function get($key,$default_value=''){
        return isset(self::$data[strtolower($key)])? self::$data[strtolower($key)] : $default_value;

    }
}
?>