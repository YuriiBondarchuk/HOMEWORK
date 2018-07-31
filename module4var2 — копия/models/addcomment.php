<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 17.07.2018
 * Time: 17:23
 */

class addcomment extends models
{
    public $data = array();
    public $zap = array();

    public function addcommentdb()
    {
        $this->data['author'] = $_POST['author'];
        $this->data['date'] = $_POST['date'];
        $this->data['comment'] = $_POST['comment'];
        $this->data['recomend'] = $_POST['recomend'];
        $this->data['tovar_id'] = $_POST['tovar_id'];


        $sql = "INSERT INTO comments (author,comment,date,recomend,varified,tovar_id) VALUE (
 '{$this->data['author']}','{$this->data['comment']}','{$this->data['date']}','{$this->data['recomend']}',
 '{$this->data['recomend']}','{$this->data['tovar_id']}'
 
)";

        $this->db->query($sql);

    }


}