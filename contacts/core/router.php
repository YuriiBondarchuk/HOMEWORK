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

    $action='action'.ucfirst($part[1]);
    if (!function_exists($action)){
        die ("Action '{$part[1]}' is not allowed in controller '{$part[0]}'");
    }
    $action();
}

    //    var_dump($controller,$action);
//    echo "<br>";
//    var_dump($part);
