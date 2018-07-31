<?php

abstract class Router
{
    function dispatch($url, $controllersPath, $baseUrl = null)
    {

        if ($baseUrl) {

            $url = substr($url, strlen($baseUrl));


        }


        $part = explode('/', trim($url, '/'));


        $controller = "{$controllersPath}/{$part[0]}.php";
        $class_name ="{$part[0]}";
//        var_dump($controller);
        if (!file_exists($controller)) {
            die ("Controller'{$part[0]}' is not defined");
        }
        require_once $controller;


        $act = (strstr($part[1], '?', true) ? strstr($part[1], '?', true) : $part[1]);

        $method = 'method'. ucfirst($act);
//        var_dump($method);
//var_dump(    method_exists($class_name,$method));die;
        if (!method_exists($class_name,$method)) {
            die ("Action $act is not allowed in controller '{$part[0]}'");
        }


        if (isset($part[2]) && $part[2] == 'login') {

            $action_login = 'action' . ucfirst($part[2]);
            if (!function_exists($action_login)) {
                die ("Action $action_login is not allowed in controller '{$part[0]}'");
            }
            $action_login();
        }
else {

    $class_name::$method();
        }
    }

}