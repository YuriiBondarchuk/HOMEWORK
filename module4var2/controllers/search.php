<?php
require_once '../lib/autoload_search.php';
require_once '../configuration/configuration.php';


$param = new RunSearch();
$param->tovDesc();


echo json_encode($param->tovar, JSON_ERROR_NONE, 10);





