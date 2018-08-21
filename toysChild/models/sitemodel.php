<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.07.2018
 * Time: 17:09
 */


class SiteModel extends Models
{
    public $nav = array();
    public $cat = array();
    public $stock = array();
    public $random = array();
    public $randomslider = array();

    public function modelCat()
    {
        $sql = "SELECT title_ukr, title_en FROM category WHERE title_en !='stock' AND title_en !='o_nas' ";

        return $this->cat = $this->db->query($sql);
    }

    public function modelNav()
    {
        $sql = "SELECT title_ukr, title_en FROM category";

        return $this->nav = $this->db->query($sql);
    }

    public function modelStock()
    {
        foreach ($this->cat as $key) {


            $sql = "SELECT tovar.title AS 't_title' , tovar.short_description, tovar.new_price,tovar.old_price,
                    subcategory.title_ukr AS 'subcat_title_ukr', subcategory.title_en AS 'subcat_title_en' , tovar.article
                    FROM tovar
               
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id
                    AND subcategory.id = tovar_subcategory.subcategory_id 
                
                    JOIN category ON tovar.category_id = category.id AND category.title_ukr = '{$key['title_ukr']}'
                    WHERE new_price < old_price AND new_price != 0 LIMIT 2";

            array_push($this->stock, $this->db->query($sql));

        }

        return $this->stock;
    }

    public function modelRandom()
    {
        foreach ($this->cat as $key) {

            $sql = "SELECT tovar.title AS 't_title', tovar.short_description, tovar.old_price, subcategory.title_ukr AS 'sub_title_ukr', tovar.article,
                    subcategory.title_en AS 'sub_title_en'
                    FROM tovar
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id   AND subcategory.id = tovar_subcategory.subcategory_id 
                    JOIN category ON tovar.category_id = category.id AND category.title_ukr = '{$key['title_ukr']}'
                    WHERE new_price < old_price ORDER BY RAND() LIMIT 3";

            array_push($this->random, $this->db->query($sql));
        }
        return $this->random;
    }

    public function modelRandomslider()
    {


        $sql = "SELECT tovar.title AS 't_title' , tovar.short_description, tovar.new_price,
                subcategory.title_en AS 'subcat_title_en', subcategory.title_ukr AS 'subcat_title_ukr' ,
                category.title_ukr AS 'cat_title_ukr', category.title_en AS 'cat_title_en',tovar.article
                    FROM tovar
               
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id   AND subcategory.id = tovar_subcategory.subcategory_id 
                
                    JOIN category ON tovar.category_id = category.id 
                    WHERE new_price < old_price AND new_price != 0 ORDER BY RAND() LIMIT 6";

        array_push($this->randomslider, $this->db->query($sql));

        return $this->randomslider;
    }
}