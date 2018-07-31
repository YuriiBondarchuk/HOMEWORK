<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 17.07.2018
 * Time: 23:32
 */

class adminmodels extends models
{
    public $allcat = array();
    public $allcom = array();
    public $allcom_not = array();

    public function allcategories()
    {
        $sql = "SELECT * FROM category ";
        $this->allcat = $this->db->query($sql);

    }

    public function allcomments_not()
    {
        $sql = "SELECT comment FROM comments WHERE varified=0 ";

        $this->allcom_not = $this->db->query($sql);

    }

}