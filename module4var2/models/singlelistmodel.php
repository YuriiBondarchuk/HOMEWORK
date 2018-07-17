<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 16.07.2018
 * Time: 10:49
 */

class SingleListModel extends Models
{
    public $tovar = array();

    public function tovDesc()
    {
        $tov_id = $_GET['tov_num'];

        $sql = "SELECT   tovar.title AS t_title, category.title AS cat_title, subcategory.title AS sub_title,
                         tovar.content, tovar.old_price,  tovar.new_price, tovar.id AS tov_id
                 FROM tovar_subcategory
                 JOIN tovar 
                 ON tovar.id = '{$tov_id}' AND  tovar_subcategory.tovar_id ='{$tov_id}'
                 JOIN category
                 JOIN subcategory ON subcategory.id = tovar_subcategory.subcategory_id AND subcategory.category_id = category.id";


        return $this->tovar = $this->db->query($sql);

    }
}