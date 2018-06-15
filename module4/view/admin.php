<?php
//require_once '../DBwork/DBwork.php';
require_once 'sample/sample.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="../style/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/my_style.css">

    <title>News Site</title>
    <!-- Custom styles for this template -->



</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h3>Admin Panel</h3>

    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <ol class="list-rectangle">


            <a href="<?=toUrl("/site/admin_tables?name=business")?>"> <li>Business</li></a>
            <a href="<?=toUrl("/site/admin_tables?name=cinema")?>"> <li>Cinema</li></a>
            <a href="<?=toUrl("/site/admin_tables?name=sport")?>"> <li>Sport</li></a>
            <a href="<?=toUrl("/site/admin_tables?name=style")?>"> <li>Style</li></a>
            <a href="<?=toUrl("/site/admin_tables?name=fashion")?>"> <li>fashion</li></a>
        </ol>


    </div>
    <hr>


    <hr>

    <footer>
        <p align="center">&copy; My_Company <b><?=date('Y')?></b></p>
    </footer>
</div> <!-- /container -->

</body>
</html>