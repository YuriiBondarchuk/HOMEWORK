<?php
class adminmodeledit extends models {
public function Update($option){
    if(rename(dirname(__DIR__)."/view/src/img/{$option['old_name']}" ,dirname(__DIR__)."/view/src/img/{$option['name']}"));
    {
        $sql="UPDATE category SET title='{$option['name']}' WHERE id='{$option['id']}'";
        return $this->db->query($sql);

    }
    return null;


}
}