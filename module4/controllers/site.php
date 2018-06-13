<?php

//require_once "class/DB.php";
//require_once 'sample/sample.php';

function actionMain ()
{
//    $name1[]= 'hello';
    $db_table_name = [
        'business' => 'business',
        'sport' => 'sport',
        'cinema' => 'cinema',
        'style' => 'style',
        'fashion' => 'fashion'
    ];

    render ('/main');
}
//var_dump($x);die;
//function actionList()
//{
//
//
//   render('/list');
//}