<?php
///**
// *
// */
////require_once 'class/DBwork.php';
////require_once 'class/Pagination.php';
////require 'class/Button.php';
//
////var_dump($db->query(COUNT,$_POST['name']));die;
//
//$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//
//$p = new Pagination(array(
//    'itemsCount' =>27,
//    'itemsPerPage' => 5,
//    'currentPage' => $page
//));
////var_dump($p);die;
//?>
<!---->
<!--<b>Pagination test</b> <hr/>-->
<!---->
<?php //foreach ($p->buttons as $button) :
//    if ($button->isActive) : ?>
<!--        <a href = '?page=--><?//=$button->page?><!--'>--><?//=$button->text?><!--</a>-->
<!--    --><?php //else : ?>
<!--        <span style="color:#555555">--><?//=$button->text?><!--</span>-->
<!--    --><?php //endif;
//endforeach; ?>
<!--?>-->
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
<!---->
<!---->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!---->
<!---->
<!--    <link href="../style/jumbotron.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="../style/my_style.css">-->
<!---->
<!--    <title>News Site</title>-->
<!--    <!-- Custom styles for this template -->-->
<!---->
<!---->
<!---->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">-->
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="#">News site</a>-->
<!--        </div>-->
<!--        <div class="navbar-collapse collapse">-->
<!--            <form class="navbar-form navbar-right" role="form">-->
<!--                <div class="form-group">-->
<!--                    <input type="text" placeholder="Email" class="form-control">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <input type="password" placeholder="Password" class="form-control">-->
<!--                </div>-->
<!--                <button type="submit" class="btn btn-success">Sign in</button>-->
<!--            </form>-->
<!--        </div><!--/.navbar-collapse -->-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<!-- Main jumbotron for a primary marketing message or call to action -->-->
<!--<div class="jumbotron">-->
<!--    <div class="container">-->
<!--        <h1>--><?//=$_POST['name']?><!--</h1>-->
<!---->
<!--        <p><a class="btn btn-primary btn-lg" role="button">Search</a></p>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="container">-->
<!--    <!-- Example row of columns -->-->
<!--    <div class="row">-->
<!--        <div class="col-md-4">-->
<!--           <ol class="list-group">-->
<!--                --><?php //$title = $db->query(SELECT_T,($_POST['name']." LIMIT 5"));?>
<!--                --><?php //foreach ($title as $item):?>
<!--                    <li class="list-group-item"> --><?//=$item['title']; ?><!--</li>-->
<!--                --><?php //endforeach;?>
<!--            </ol>-->
<!---->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--    <hr>-->
<!---->
<!--    <footer>-->
<!--        <p align="center">&copy; My_Company <b>--><?//=date('Y')?><!--</b></p>-->
<!--    </footer>-->
<!--</div> <!-- /container -->-->
<!---->
<!--<!-- jQuery -->-->
<!--<script src="/examples/vendors/jquery/jquery-3.3.1.min.js"></script>-->
<!--<!-- Popper -->-->
<!--<script src="/examples/vendors/popper.js/popper.min.js"></script>-->
<!--<!-- Bootstrap JS -->-->
<!--<script src="/examples/vendors/bootstrap-4/js/bootstrap.min.js"></script>-->
<!--</body>-->
<!--</html>-->