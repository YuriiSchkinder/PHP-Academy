<?php
class officeController{
    public $models;
    public function __construct($method){
        $this->models=new RecordsOffice();
        if(!empty($method)){
            if(method_exists(__CLASS__,$method)){
                call_user_func([__CLASS__,$method]);
            }
        }else{
            $this->showMethod();
        }
    }
    public function showMethod(){
         $offices=$this->models->showOffice();
         require_once '../views/offices.php';
    }
    public function selectMethod(){
        $office=substr($_SERVER['REQUEST_URI'],strrpos($_SERVER['REQUEST_URI'],'/')+1);
       $res=$this->models->selectOffice($office);
       require_once '../views/viewRecordOffice.php';
    }
    public function updateMethod(){
        $str=str_replace('/office/update/','',$_SERVER['REQUEST_URI']);
        $office=substr($str,0,strpos($str,'/'));
        $where=substr($str,strrpos($str,'/')+1);
        $a = strrpos($where, '-');
        $str = substr($where, 0, $a) . '=' . "'" . substr($where, $a + 1) . "'";
        $result=$this->models->selectOffice($office,$str);
        if(isset($_POST)and !empty($_POST)){
          $res=  $this->models->update($office,$_POST,$str);
            require_once '../views/viewRecordOffice.php';
        }else{
            $url=substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'], '/'));
            require_once '../components/form.php';
        }
    }
    public function insertMethod(){


    }
}

?>