<?php
class UserModel{

    protected $db;
    public function register()
    {
        if ($this->valid()) {
            $error = $this->valid();
            $user = $_POST;
            return compact('error', 'user');
        } elseif($_POST) {
            $sql = "INSERT INTO `users`(`login`, `email`, `password`) VALUES ('{$_POST['login']}','{$_POST['email']}','{$_POST['password']}')";
            $result = $this->db->query($sql);
            if ($result) {
                return 'Ви зареэструвалися!';
            }
        }
    }

    protected function valid()
    {
        $error = [];
        if($_POST) {
            if (strlen($_POST['login']) < 3) {
                $error['login'] = 'Короткий логін';
            }
            if (!strpos($_POST['email'], '@') && !strpos($_POST['email'], '.')) {
                $error['email'] = 'Некоректний email';
            }
            if (strlen($_POST['password']) <= 6) {
                $error['password'] = 'Короткий пароль';
            }
        }
        return $error;
    }

    public function __construct()
    {
        $this->db= new DB();
    }
}
?>