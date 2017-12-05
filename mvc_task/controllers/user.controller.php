<?php
class UserController
{
    protected $model;
    protected $view;

    public function register()
    {
        $this->view->render($this->model->register());
    }

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new View();
    }
}
?>