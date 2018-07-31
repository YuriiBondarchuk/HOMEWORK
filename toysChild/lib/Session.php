<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 16.06.2018
 * Time: 7:35
 */

class Session

{


    function  set ($key,$value)
    {
        $_SESSION[$key] = $value;
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