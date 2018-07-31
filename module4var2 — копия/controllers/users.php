<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 17.07.2018
 * Time: 13:09
 */

class Users
{
    public static $data = array();


    public function methodAccount()
    {
        $menu = new SiteModel();
        $menu->modelMain();
        self::$data = new acountmodel();
        self::$data->userList();


        if (self::$data->users&& self::$data->users[0]['name']!='') {
            Session::set('name', self::$data->users[0]['name'] );

            Helper::redirect('../site/main');
        } else {
            Session::delete('name');
            $message = 'Wrong username or password';
            Template::render('account', ['cat' => $menu->cat, 'message' => $message,'name'=> self::$data->users[0]['name']]);
        }


    }

    public function methodNewUsers()
    {
        $menu = new SiteModel();
        $menu->modelMain();
        Template::render('register', ['cat' => $menu->cat]);
    }

    public function methodRegister()
    {
        $menu = new SiteModel();
        $menu->modelMain();

        self::$data = new registermodel();
        if (!self::$data->getUser()) {
            self::$data->setUser();
            Template::render('account', ['cat' => $menu->cat]);
        } else {
            $message = "A user with that name or password exists";
            Template::render('register', ['cat' => $menu->cat, 'message' => $message]);
        }


    }

}