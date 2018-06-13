<?php

    $config = require_once __DIR__.'/configuration/configuration.php';

    require_once __DIR__.'/core/helper.php';
    require_once __DIR__.'/core/template.php';
    require_once __DIR__.'/core/router.php';




// var_dump($_SERVER['REQUEST_URI']);
    dispatch($_SERVER['REQUEST_URI'],$config['controllersPath'],$config['baseUrl']);
echo "<br>";


