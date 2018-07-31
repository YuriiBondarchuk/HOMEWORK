<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 17.07.2018
 * Time: 23:32
 */

class admincont
{
    public static $categories = array();
    public static $tovarandcomment = array();
    public static $option = array();
    public static $dataauthorizied;

    public function methodMain()
    {
        self::$categories = new adminmodels();
        self::$categories->allcategories();
        self::$categories->allcomments_not();
        Template::render('admin/admin_index', ['cat' => self::$categories->allcat, 'no_recom' => self::$categories->allcom_not]);
    }

    public function methodcategorieAdmin()
    {
        self::$categories = new adminmodels();
        self::$categories->allcategories();

        Template::render('admin/categorieadmin', ['cat' => self::$categories->allcat]);
    }

    public function methodcategoryEdit()
    {
        $get = $_GET['id'];
        self::$categories = new adminmodelscategoriedit();
        self::$categories->getdb($get);

        Template::render('admin/categoryEdit', ['category' => self::$categories->getdb($get)]);
    }

    public function methodEdit()
    {
        self::$option = ['id' => $_POST['id'], 'name' => $_POST['name'], 'action' => $_POST['action'], 'old_name' => $_POST['old_name']];

        self::$categories = new adminmodeledit();
        self::$categories->Update(self::$option);

        helper::redirect('main');
    }

    public function methodCommentsAlltovarAdmin()
    {


        self::$tovarandcomment = new commentsAlltovarAdminmodels();
        self::$tovarandcomment->AllcommentandTovar();

        Template::render('admin/commentsAlltovar', ['tovar' => self::$tovarandcomment->arr]);
    }

    public function methodtovarEdit()
    {
        $get = $_GET['id'];
        self::$tovarandcomment = new tovarEditmodels();


        Template::render('admin/tovarEdit', ['tovar' => self::$tovarandcomment->tovarSelect($get)]);
    }

    public function methodUpdateTovar()
    {

        self::$option = ['id' => $_POST['id'], 'title' => $_POST['title'], 'content' => $_POST['content'],
            'old_price' => $_POST['old_price'], 'new_price' => $_POST['new_price'], 'category_id' => $_POST['category_id'],
            'short_description' => $_POST['short_description']];

        self::$tovarandcomment = new adminupdatetovar();
        self::$tovarandcomment->Updatetovar(self::$option);

        helper::redirect('main');
    }

    public function methodAdminAthorizied()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $option = array();
        $option['email'] = $email;
        $option['password'] = $password;

        self::$dataauthorizied = new adminAthoriziedmodels();
        self::$dataauthorizied->getAdmin($option);
        helper::redirect('main');

    }

    public function methodAdminExit()
    {

        Session::destroy();
        helper::redirect('main');

    }




}