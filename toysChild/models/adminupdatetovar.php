<?php
class adminupdatetovar extends models {
    public function Updatetovar($option){


            $sql="UPDATE tovar SET title='{$option['title']}',old_price='{$option['old_price']}',new_price='{$option['new_price']}'
 ,short_description ='{$option['short_description']}',content='{$option['content']}',category_id='{$option['category_id']}' WHERE id='{$option['id']}'";
            return $this->db->query($sql);



    }
}