<?php
//var_dump(dirname(__DIR__));
$basePath=dirname(__DIR__);

return ['baseUrl'=>'/contacts',
        'controllersPath'=>"{$basePath}/controllers",
        'viewsPath'=>"{$basePath}/views",
        'storagePath'=>"{$basePath}/storages"
];
