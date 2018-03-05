<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 05.03.2018
 * Time: 11:18
 */

class staticcountSelf
{
    public static $count;

    public function  __construct()
    {
        self::$count++;
    }

}