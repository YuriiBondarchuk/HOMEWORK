<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 18.07.2018
 * Time: 3:49
 */

class tovarEditmodels extends models
{
    public $tovarselect;

    public function tovarSelect($id)
    {
//    $sql="UPDATE tovar SET title,old_price, new_price,content,short_description"
        $sql = "SELECT * FROM tovar WHERE id='{$id}'";

        return $this->db->query($sql);
    }
}