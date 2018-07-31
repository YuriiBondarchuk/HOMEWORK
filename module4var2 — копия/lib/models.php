<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.07.2018
 * Time: 18:30
 */

class models
{

    protected $db;

    public function __construct()
    {
        $this->db = new DB(config::get('host'),config::get('user'),config::get('password'),config::get('database'));
    }


}