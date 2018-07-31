<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.07.2018
 * Time: 15:17
 */

abstract class config
{
    protected static $options = array();

    /**
     * @param mixed $options
     */
    public function set($key, $value)
    {
     self::$options[$key] = $value;
    }

    public static function get($key)
    {
       return self::$options[$key];
    }
}