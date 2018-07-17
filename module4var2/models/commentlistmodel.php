<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 17.07.2018
 * Time: 18:58
 */

class commentlistmodel extends models
{
    public $listcomment = array();
    public $recomend = array();
    public $no_recomend = array();

    public function allcomment($id)
    {

        $sql = "SELECT comment,author, date FROM comments WHERE comments.tovar_id = '{$id}' AND comments.varified =1";


        return $this->listcomment = $this->db->query($sql);


    }
    public function recomend($id)
    {

        $sql = "SELECT COUNT(*) AS recom FROM comments WHERE comments.recomend = '1' ";





        return $this->recomend=$this->db->query($sql);


    }
    public function no_recomend($id)
    {



        $sql = "SELECT COUNT(id) AS no_recom FROM comments WHERE comments.tovar_id = '{$id}' AND comments.recomend = 0 ";



        return $this->no_recomend = $this->db->query($sql);


    }
}