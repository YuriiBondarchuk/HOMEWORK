<?php


abstract class Helper
{


//    public static function config($key, $default = null)
//    {
//
//        global $config;
//
//        return array_key_exists($key, $config) ? $config[$key] : $default;
//    }


    public static function toUrl($url)
    {

        return config::get('src') . '/' . trim($url, '/');
    }

    public static function redirect($url, $status = 301)
    {
        // var_dump($url);

        header("Location: {$url}", $status);
//    exit;
    }
}