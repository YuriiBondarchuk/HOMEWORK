<?php


require_once './autoload.php';


class Authorizing extends DB
{
    private $user;

    public function __construct()
    {
        $this->user = ['login' => $_POST['login'], 'password' => $_POST['password']];

        parent::__construct();
    }

    public function userVerifacation()
    {
//        $sql = "SELECT `name`, `money` FROM `user` WHERE `login` = '{$this->user['login']}' AND `password` = '{$this->user['password']}'";
//
//        $data = $this->query($sql);
//        Session::ura();
//        if (!empty($data[0])) {
//            Session::set('user', $data[0]['name'], $data[0]['money']);
//            header('Location: ../index.php?result=false');
//
//
//
//        } else {
//            $_POST['message'] = 'not a valid username or password';
//            header('Location: ../index.php?result=false');
//        }

        $_REQUEST['name']='ura';
        var_dump($_REQUEST);
      require_once '../index.php';


    }

}

$authorizing = new Authorizing();
$authorizing->userVerifacation();



