<?php
require_once "class/DB.php";


//session_start();


$host = 'localhost';
$database = 'news_site';
$user = 'YMB';
$password = 'YMB';

$db = new DB($host,$user,$password,$database);
//$db->query("UPDATE style SET click = 25 WHERE id = 5");

const SELECT_T = "SELECT title,id,content,read_total FROM ";
//$title = $db->query(SELECT_T,'business');

// if (isset($_SESSION['']))$SELECT_T = "SELECT title FROM ";

const COUNT = "SELECT COUNT(*) FROM ";
//var_dump($_POST);
//    session_start();
if (isset($_SESSION['name']))
{
    $name = $_SESSION['name'];
    $count = $db->query(COUNT, $name)[0]['COUNT(*)'];
    $_SESSION['count'] = $count;
}


//else return;


//var_dump((int)$count['COUNT(*)']);die;




const SORT_DATE = "SELECT  Data,id FROM sport ORDER BY Data DESC LIMIT 3";
$sort_date = $db->query(SORT_DATE);