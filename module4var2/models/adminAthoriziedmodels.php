<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 18.07.2018
 * Time: 10:07
 */

class adminAthoriziedmodels extends models
{
    public function getAdmin($option)
    {
        $sql = "SELECT `name`  FROM admin WHERE email='{$option['email']}' AND `password`='{$option['password']}'";
        if ($this->db->query($sql)) {
            return Session::set("admin", $option['email']);
        }
        return null;
    }
}