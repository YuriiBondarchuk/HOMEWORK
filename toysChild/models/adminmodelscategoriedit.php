<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 18.07.2018
 * Time: 1:37
 */

class adminmodelscategoriedit extends models
{
public function getdb($id){
    $sql ="SELECT * FROM category WHERE id='{$id}'";

return $this->db->query($sql);
}
}