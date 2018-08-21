<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 15.07.2018
 * Time: 16:02
 */

class ProductListmodel extends Models
{
    public $tov_all = array();
    public $pagin = array();
    public $category;

    public function tovarList()
    {
        $category = $_GET['category'];
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start = $page==1 ? 0 : (($page-1)*3 );

        $sql = "SELECT tovar.title AS 't_title', tovar.short_description,tovar.id,
                       tovar.old_price, subcategory.title_ukr AS 'sub_title', category.title_ukr AS 'cat_title_ukr',
                       category.title_en AS 'cat_title_en'  
                    FROM tovar
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id   AND subcategory.id = tovar_subcategory.subcategory_id 
                    JOIN category ON tovar.category_id = category.id AND category.title_en = '{$category}' LIMIT {$start}, 3";

        return $this->tov_all = $this->db->query($sql);


    }
    public function categoryName()
    {
        $category = $_GET['category'];


        $sql = "SELECT category.title_ukr AS 'cat_title_ukr', category.title_en AS 'cat_title_en'  
                    FROM  category WHERE category.title_en = '{$category}' ";

        return $this->category = $this->db->query($sql);


    }

    public function tovarListPagin()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

//var_dump($start);die;
        $category = $_GET['category'];

        $sql = "SELECT COUNT(*) 
                    FROM tovar
                    JOIN subcategory  
                    JOIN tovar_subcategory ON tovar.id = tovar_subcategory.tovar_id   AND subcategory.id = tovar_subcategory.subcategory_id 
                    JOIN category ON tovar.category_id = category.id AND category.title_en = '{$category}' ";

        $this->pagin = new Pagination(array(
            'itemsCount' => (int)$this->db->query($sql)[0]['COUNT(*)'],
            'itemsPerPage' => 3,
            'currentPage' => $page
        ));


        return $this->pagin;


    }

}