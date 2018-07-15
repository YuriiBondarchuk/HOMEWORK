<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.07.2018
 * Time: 16:27
 */

class Site


{

    public static $data;
    public static $stock;

    public function methodMain()

    {
        self::$data = new SiteModel();

        self::$data->modelMain();
        self::$data->modelStock();
        self::$data->modelRandom();
        self::$data->modelRandomslider();

        Template::render('index', ['cat' => self::$data->cat,
            'stock' => self::$data->stock, 'random' => self::$data->random, 'randomslider' => self::$data->randomslider]);
    }

    public function methodProduct()
    {
        $menu = new SiteModel();
        $menu->modelMain();
        self::$data = new ProductListmodel();
        self::$data->tovarList();

        Template::render('product', ['cat' => $menu->cat,'tovar'=>self::$data->tov_all]);
    }

}
