<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 03.03.2018
 * Time: 17:18
 */

class Test
{
    private $val;

    public function setVal($val)
    {
        $this->val = $val;
    }

    public function getVal()
    {
        return $this->val;
    }
}

$t = new Test;
$t->setVal(25);

