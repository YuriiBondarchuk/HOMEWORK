<?php
//session_start();
require_once './Models/autoload.php';
$connect = new DB('localhost', 'root','','store_test');

$sql =new QueryDB();

var_dump($_REQUEST);
$data = $connect->query($sql->getData());


require_once './template.html';
