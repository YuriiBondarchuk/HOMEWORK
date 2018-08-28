<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 28.08.2018
 * Time: 11:41
 */

class upgrademoneydb extends DB
{
    public $sql;

    public function __construct($host = 'localhost', $user = 'root', $password = '', $database = 'store_test')
    {
        parent::__construct($host, $user, $password, $database);
    }

    public function requestCreate()
    {
        $sql = "UPDATE `users` SET `money` = '{$_POST["money"]}' WHERE `name` = '{$_POST['user_name']}'";
        $this->sql = $sql;
    }


}
$upgrade = new upgrademoneydb();
//$upgrade->query($this->sql);
$name = 'ura';
file_put_contents('test.txt',"$name");