<?php
require_once 'sample/sample.php';

$title = $db->query(SELECT_T,$name." WHERE id = $id");
//var_dump((int)$title[0]['read_totall']);die;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script type="text/javascript" src="../script/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style/my_style.css">




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="../style/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/my_style.css">

    <title>News Site</title>
    <!-- Custom styles for this template -->
    <script src="../script/script.js" ></script>


</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Authorizing</a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h2 id='name' align="center"><?=$name?></h2>
        <p><a id="button" class="btn btn-primary btn-lg data-class" role="button" href="">Search</a></p><br>
        <span ><a  class="btn btn-primary btn-lg data-class" role="button" href="<?=toUrl('site/main')?>">Go to main</a></span>


    </div>
    <span >Read now: <span id="write"> </span></span><br>
    <span >Total read: <span > <?= $title[0]['read_total']?></span><span id="read_total"></span></span>
</div>

<div class="container">

    <h2 align="center"><?=$title[0]['title']?></h2>
    <div>
        <img src="<?=toUrl("img/"."$name".'/'."$id".'.jpg')?>" alt="">  <?=$title[0]['content']?>
    </div>


    <hr>
    <br>
     <footer>
        <p align="center" style="bottom: 0px">&copy; My_Company <b><?=date('Y')?></b></p>
    </footer>
    <p id="id" style="color: white" ><?=$id?></p>
</div> <!-- /container -->



</body>
</html>