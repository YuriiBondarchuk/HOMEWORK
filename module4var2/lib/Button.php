<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.06.2018
 * Time: 15:40
 */

class Button
{
    public $page;
    public $text;
    public $isActive;

    public function __construct($page, $isActive = true, $text = null)
    {
        $this->page = $page;
        $this->text = is_null($text) ? $page : $text;
        $this->isActive = $isActive;
    }
}