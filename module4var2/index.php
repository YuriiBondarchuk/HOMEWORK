<?php
define( BASE_PATH, __DIR__);

require_once __DIR__.'/lib/autoload.php';
require_once __DIR__.'/configuration/configuration.php';



session_start();

// var_dump($_SERVER['REQUEST_URI']);
   Router::dispatch($_SERVER['REQUEST_URI'],config::get('controllersPath'),config::get('baseUrl'));
echo "<br>";


