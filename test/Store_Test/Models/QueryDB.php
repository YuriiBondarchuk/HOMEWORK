<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 24.08.2018
 * Time: 12:45
 */

class QueryDB
{
    public function __construct()
    {
        $this->setData();
    }

    protected $sql;

    /**
     * @return mixed
     */
    /**
     * @param mixed $data
     */
    public function setData()
    {
        $str = "SELECT * FROM commodity";
        $this->sql = $str;
    }

    public function getData()
    {
        return $this->sql;
    }

}