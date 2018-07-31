<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 18.07.2018
 * Time: 3:23
 */

class commentsAlltovarAdminmodels extends models
{
    public $arr = array();

    public function AllcommentandTovar()
    {
        $sql = "SELECT * FROM tovar";
        array_push($this->arr, $this->db->query($sql));
        $sql = "SELECT * FROM comments";
        array_push($this->arr, $this->db->query($sql));
        return $this->arr;
    }
}