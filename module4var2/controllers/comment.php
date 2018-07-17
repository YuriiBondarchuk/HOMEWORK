<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 17.07.2018
 * Time: 17:22
 */

class comment
{
    public static $data;
    public static $tovar_id;
    public function methodAddcomment() {

        self::$data = new addcomment();
        $tovar_id = $_POST['tovar_id'];
        self::$data->addcommentdb();

        Helper::redirect("../site/single?tov_num=$tovar_id");

    }

}