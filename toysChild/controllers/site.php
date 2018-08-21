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
    public static $comment;


    public function methodMain()

    {
        self::$data = new SiteModel();

        self::$data->modelCat();
        self::$data->modelNav();
        self::$data->modelStock();
        self::$data->modelRandom();
        self::$data->modelRandomslider();

        Template::render('index', ['nav' => self::$data->nav, 'cat' => self::$data->cat,
            'stock' => self::$data->stock, 'random' => self::$data->random, 'randomslider' => self::$data->randomslider]);
    }

    public function methodProduct()
    {
        $menu = new SiteModel();
        $menu->modelNav();
        self::$data = new ProductListmodel();
        self::$data->tovarList();
        self::$data->tovarListPagin();
        self::$data->categoryName();

        Template::render('product', ['category'=>self::$data->category,'cat' => $menu->nav, 'tovar' => self::$data->tov_all, 'pagin' => self::$data->pagin]);
    }

    public function methodSingle()
    {
        $menu = new SiteModel();
        $menu->modelNav();
        self::$data = new SingleListModel();
        self::$data->tovDesc();
        self::$comment = new commentlistmodel();
        self::$comment->recomend(self::$data->tovar[0]['tov_id']);
        self::$comment->no_recomend(self::$data->tovar[0]['tov_id']);


        Template::render('single', ['cat' => $menu->cat, 'tovar' => self::$data->tovar,
            'comment' => self::$comment->allcomment(self::$data->tovar[0]['tov_id']), 'recom' => self::$comment->recomend, 'no_recom' => self::$comment->no_recomend]);
    }

    public function methodUserExit()
    {

        Session::destroy();
        helper::redirect('main');

    }


}
