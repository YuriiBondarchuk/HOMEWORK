<?php


function isAdult($age, $country){
    $counties=[
        'Ukraine'=>18,
        'China'=>16,
        'USA'=>21
    ];
    return array_key_exists($country, $counties)? $counties[$country]<=$age:true;
}
var_dump(isAdult(33,'USA'));