<?php
class PagesController extends Controller{
public function index(){
    $this->data['content']='daaaaaaaaaaaaaaaa';
}
public function view(){
    $params=App::getRouter()->getParams();
    $this->data['content']='nnnnnnnnnnaaaa';
}
}