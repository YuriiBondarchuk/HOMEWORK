<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 19.07.2018
 * Time: 23:20
 */
require_once 'Session.php';
//Клас для выхода из сессии
class Exit_site
{
    protected $SignOut;
    public static function SignOut()
    {
        $SignOut=new Session();
        if(isset($_SESSION)){
        $SignOut->destroy();
        }

        header( 'Location: ../index.php', true, 307 );

    }
}
Exit_site::SignOut();
