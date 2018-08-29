<?php


function __autoload ($class_name){

    $dir = __DIR__ . '\\' . strtolower($class_name).'.php';


    if (file_exists($dir)){

        require_once ($dir);
    }
    else {
        throw new Exception('Failed to include class: '.$class_name);
    }

}

