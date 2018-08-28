<?php

session_start();

if (isset($_POST['exit'])) {

//    Session::delete('user');
//
//    unset($_POST['exit']);
//
//    Session::delete('rating');
//
//    header('Location: ../index.php');
}

class Session

{


    function set($key, $value, $money = null)
    {
        $_SESSION[$key] = ['name' => $value, 'money' => $money];
    }

    function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    function delete($key)
    {
        if (isset($_SESSION[$key])) {

            unset($_SESSION[$key]);
        }
    }

    function destroy()
    {
        session_destroy();

    }
}

