<?php
function dispatch($url,$controllersPath,$baseUrl = null) {
    if($baseUrl){
        $url = substr($url,strlen($baseUrl));
    }

    $part = explode('/',trim($url,'/'));

    $controller="{$controllersPath}/{$part[1]}.php";
    if (!file_exists($controller)){
        die ("Controller'{$part[1]}' is not defined");
    }
    require_once $controller;

    $action='action'.ucfirst($part[2]);
    if (!function_exists($action)){
        die ("Action '{$part[2]}' is not allowed in controller '{$part[1]}'");
    }
    $action();
}

//        var_dump($controller,$action);
//    echo "<br>";
//    var_dump($part);
