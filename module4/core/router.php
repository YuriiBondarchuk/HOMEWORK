<?php

function dispatch($url,$controllersPath,$baseUrl = null) {
    if($baseUrl){
        $url = substr($url,strlen($baseUrl));

    }



    $part = explode('/',trim($url,'/'));





    $controller="{$controllersPath}/{$part[0]}.php";

    if (!file_exists($controller)){
        die ("Controller'{$part[0]}' is not defined");
    }
    require_once $controller;



    $act = (strstr($part[1],'?',true) ? strstr($part[1],'?',true) : $part[1]);

    $action='action'.ucfirst($act);
    if (!function_exists($action)){
        die ("Action $act is not allowed in controller '{$part[0]}'");
    }
//    $action();

    if(isset($part[2])&&$part[2]=='login') {

        $action_login='action'.ucfirst($part[2]);
    if (!function_exists($action_login)){
        die ("Action $action_login is not allowed in controller '{$part[0]}'");
    }
    $action_login();
    }
    else {
    $action();
    }
}