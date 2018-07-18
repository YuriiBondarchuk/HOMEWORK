<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 17.07.2018
 * Time: 13:23
 */

class registermodel extends models
{
    public $users_add = array();
    public $users_is = array();

    public function setUser()
    {

        $this->users_add['name'] = $_POST['name'];
        $this->users_add['last_name'] = $_POST['last_name'];
        $this->users_add['email'] = $_POST['email'];
        $this->users_add['password'] = $_POST['password'];

        $sql = "INSERT INTO users (`name`,`last_name`,`email`,`password`)
                VALUE (
                            '{$this->users_add['name']}',
                            '{$this->users_add['last_name']}', 
                            '{$this->users_add['email'] }',
                            '{$this->users_add['password']}'
                       )";

        $this->db->query($sql);
    }

    public function getUser()
    {
        $this->users_add['email'] = $_POST['email'];
        $this->users_add['password'] = $_POST['password'];

        $sql = "SELECT email, password FROM users 
                WHERE
                       email='{$this->users_add['email'] }'
                AND 
                       password='{$this->users_add['password']}'";

        return $this->users_is = $this->db->query($sql);
    }
}