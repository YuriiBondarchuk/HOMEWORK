<?php

$user=array($_POST);
var_dump($user);
$user_s = serialize($user);
echo "<br><br>";
echo($user_s);

