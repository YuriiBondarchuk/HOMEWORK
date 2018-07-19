<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 20.07.2018
 * Time: 0:40
 */
require_once 'authorizing.php';



class Select {
    public static $data;

    public static function selectLanguage(){
        $language =json_decode($_REQUEST['param'])->search;
        return  $language;
    }
}


Select::$data = new authorizing();






    $zapros_book = Select::$data->zaprosLibraryBook(Select::selectLanguage());

    $zapros_author = array();
    foreach ($zapros_book[0] as $key) {
        $zapros_author[$key['name_book']] =Select::$data->zaprosLibraryAuthor(Select::selectLanguage(), $key['name_book']);


    }

echo json_encode(array_map(function($x) { return $x; }, $zapros_author));;



