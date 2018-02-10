<?php


$menu=[
    [
        'label'=>'HOME',
    'url'=>'/HOME',
    'child'=>[
        'url'=>'Ura',
        'label'=>'Ura'
        ]
    ],
    [
        'label'=>'CONTACTS',
        'url'=>'/CONTACTS',
        'child'=>[
            'url'=>'Alina',
            'label'=>'Alina'
        ]

    ]



];

//print_r($menu[1]['child']['label']);
//print_r ($menu);
echo"<br>";
echo"<ul type='circle'>";
foreach ($menu as $ur1){
    echo"<li><a href='{$ur1['url']}'> {$ur1['label']} </a></li>";
     echo"<br>";
    if ($ur1['child']){
        echo" <li><a href='{$ur1['child']['url']}'> <i>{$ur1['child']['label']}</i> </a></li>";
    }
    echo"<br>";




}
echo"</ul>";