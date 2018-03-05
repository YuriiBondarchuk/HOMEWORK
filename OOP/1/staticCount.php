<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 05.03.2018
 * Time: 10:53
 */

class staticCount
{
    public static $count;
    public function __construct()
    {
      $this::$count++;
    }
}