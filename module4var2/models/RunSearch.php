<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 16.07.2018
 * Time: 16:18
 */




 class RunSearch extends models
{
    public $tovar = array();

    public function tovDesc()
    {
        $tov_search = json_decode($_REQUEST['param'])->search;


        $sql = "SELECT title, id FROM tovar WHERE title LIKE '{$tov_search}%'";

        return $this->tovar = $this->db->query($sql);


    }
}