<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.07.2018
 * Time: 17:09
 */


class SiteModel extends Models
{

    public $cat = array();
    public $stock = array();
    public $random = array();
    public $randomslider = array();

    public function modelMain()
    {
        $sql = "SELECT title FROM category";

        return $this->cat = $this->db->query($sql);
    }

    public function modelStock()
    {
        foreach ($this->cat as $key) {

            $sql = "SELECT tovar.title AS 't_title' , tovar.short_description, tovar.new_price,tovar.old_price, subcategory.title AS 'subcat_title'
                    FROM tovar
               
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id   AND subcategory.id = tovar_subcategory.subcategory_id 
                
                    JOIN category ON tovar.category_id = category.id AND category.title = '{$key['title']}'
                    WHERE new_price < old_price AND new_price != 0 LIMIT 2";

            array_push($this->stock, $this->db->query($sql));
        }
        return $this->stock;
    }

    public function modelRandom()
    {
        foreach ($this->cat as $key) {

            $sql = "SELECT tovar.title AS 't_title', tovar.short_description, tovar.old_price, subcategory.title AS 'sub_title' FROM tovar
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id   AND subcategory.id = tovar_subcategory.subcategory_id 
                    JOIN category ON tovar.category_id = category.id AND category.title = '{$key['title']}'
                    WHERE new_price < old_price ORDER BY RAND() LIMIT 3";

            array_push($this->random, $this->db->query($sql));
        }
        return $this->random;
    }

    public function modelRandomslider()
    {


            $sql = "SELECT tovar.title AS 't_title' , tovar.short_description, tovar.new_price, subcategory.title AS 'subcat_title' , category.title AS cat_title
                    FROM tovar
               
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id   AND subcategory.id = tovar_subcategory.subcategory_id 
                
                    JOIN category ON tovar.category_id = category.id 
                    WHERE new_price < old_price AND new_price != 0 ORDER BY RAND() LIMIT 6";

            array_push($this->randomslider, $this->db->query($sql));

        return $this->randomslider;
    }
}