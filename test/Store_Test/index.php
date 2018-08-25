<?php
session_start();
require_once './Models/autoload.php';


$connect = new DB('localhost', 'root', '', 'store_test');

$sql = new QueryDB();

$data = $connect->query($sql->getData());

require_once './template.html';



