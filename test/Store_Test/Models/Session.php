<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 16.06.2018
 * Time: 7:35
 */

class Session

{


//    function  set ($key,$value,$money=null)
//    {
////        $_SESSION[$key] = ['name'=>$value,'money'=>$money];
//    }
public function ura (){
    return $_SESSION['ura']= 'ura';
}
    function  get($key)
    {
        if (isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        return null;
    }
    function delete($key)
    {
        if (isset($_SESSION[$key])){
            unset($_SESSION[$key]);
        }
    }

    function destroy ()
    {
        session_destroy();

    }
}

