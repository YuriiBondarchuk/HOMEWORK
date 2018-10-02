<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 28.09.2018
 * Time: 16:29
 */


require_once './class/InsertDataDB.php';

require_once './class/DB.php';



$data = new InsertDataDB();
$data->setData();
$data->saveImage();
$data->sendMailMsg();