<?php


function __autoload ($class_name){

    $lib_path = BASE_PATH.'\lib\\'.strtolower($class_name).'.php';

    $controllers_path =BASE_PATH.'\controllers\\'.strtolower($class_name).'.php';
    $model_path = BASE_PATH.'\models\\'.strtolower($class_name).'.php';
    $core_path = BASE_PATH.'\core\\'.strtolower($class_name).'.php';


    if (file_exists($lib_path)){
        require_once ($lib_path);
    }
    elseif (file_exists($controllers_path)){
        require_once ($controllers_path);
    }
    elseif (file_exists($model_path)){
        require_once ($model_path);
    }
    elseif (file_exists($core_path)){
        require_once ($core_path);
    }
    else {
        throw new Exception('Failed to include class: '.$class_name);
    }

}

