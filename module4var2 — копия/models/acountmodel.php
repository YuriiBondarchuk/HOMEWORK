<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 17.07.2018
 * Time: 12:43
 */

class acountmodel extends models
{
    public $users = array();
    public $email, $password,$name;

    public function userList()
    {
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->name = $_POST['name'];

        $sql = "SELECT `name`, email, last_name FROM users WHERE email='{$this->email}' AND password='{$this->password}'";

        $this->users = $this->db->query($sql);

        return $this->users;


    }
}