<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 14.06.2018
 * sample
 * Time: 19:38
 */


$id = $_POST['id'];
$name = $_POST['name'];
$read_t = $_POST['read'];

$dbh = mysqli_connect('localhost','YMB', 'YMB','news_site');

mysqli_query($dbh, "UPDATE $name SET read_total = $read_t WHERE id = $id");

mysqli_close($dbh);



//UPDATE `business` SET `read_totall`= 25 WHERE id = 2 "UPDATE $name SET read_totall = (int)$read_t WHERE id = (int)$id"