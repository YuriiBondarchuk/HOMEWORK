<?php

$dsn = 'mysql:host=localhost; dbname=practice_db';
$user = 'Yurii';
$password = 'uraalina250812';
try {
    $dbh = new PDO ($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $coh = $dbh->query('SELECT * FROM country LIMIT 3' );
    $country = $coh->fetchAll(PDO::FETCH_OBJ);
    var_dump ($country);
} catch (PDOException $e) {
    echo $e->getMessage();
}