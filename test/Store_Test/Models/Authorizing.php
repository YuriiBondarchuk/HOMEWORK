<?php
require_once './autoload.php';

session_start();

class Authorizing extends DB
{
    private $user;
    private $userverification;

    public function __construct()
    {
        parent::__construct();
        $this->setUser($_POST);

    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = ['login' => $user['login'], 'password' => $user['password']];
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    public function userVerification()
    {
        $sql = "SELECT `name`,`money` FROM `users`
                WHERE `login` = '{$this->user['login']}'
                AND `password` = '{$this->user['password']}'";

        $this->userverification = $this->query($sql)[0];

        if (!empty($this->userverification)) {
            Session::set('user', $this->userverification['name'], $this->userverification['money']);
            unset($_SESSION['message']);
            $_SESSION['rating'] = array();
            header('Location: ../index.php');

        } else {
            $_SESSION['message'] = "user or password are invalid";
            Session::delete('user');
            header('Location: ../index.php');
        }
    }
}

$user = new Authorizing();
$user->userVerification();


