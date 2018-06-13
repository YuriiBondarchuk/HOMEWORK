<?php
require_once "class/DB.php";


$x="ura";


$host = 'localhost';
$database = 'news_site';
$user = 'YMB';
$password = 'YMB';

$db = new DB($host,$user,$password,$database);

const SELECT_T = "SELECT title FROM ";
$title = $db->query(SELECT_T,'business');

const COUNT = "SELECT COUNT(*) FROM ";


const SORT_DATE = "SELECT  Data,id FROM business ORDER BY Data DESC LIMIT 3";