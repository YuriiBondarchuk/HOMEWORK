<?php
/**
 * @var select_page int
 */
require_once 'sample/sample.php';
require_once 'class/Pagination.php';
require 'class/Button.php';


$page = isset($select_page) ? (int)$select_page : 1;
$start = ($page == 1) ? 0 : ($page * 2 - 2);

$p = new Pagination(array(
    'itemsCount' => (int)$count,
    'itemsPerPage' => 2,
    'currentPage' => $page
));
$count_button = count($p->buttons);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="../style/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/my_style.css">

    <title>News Site</title>
    <!-- Custom styles for this template -->


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
            <a class="navbar-brand" href="#">News site</a>
        </div>
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
    </div><!--/.navbar-collapse -->
</div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1><?= $name ?></h1>

        <p><a class="btn btn-primary btn-lg data-class" role="button">Search</a></p>
        <span><a class="btn btn-primary btn-lg data-class" role="button" href="<?= toUrl('site/main') ?>">Go to main</a></span>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <ol class="list-group">

                <?php $title = $db->query(SELECT_T, ($name . " LIMIT $start,2")); ?>
                <?php foreach ($title as $item): ?>
                    <a href="<?= toUrl("site/news?id={$item['id']}") ?>">
                        <li class="list-group-item"><?= $item['title']; ?></li>
                    </a>
                <?php endforeach; ?>
            </ol>

        </div>


    </div>
    <hr>
    <br>
    <form action="">
        <?php foreach ($p->buttons as $button) :
            if ($button->isActive) : ?>
                <form>
                    <button class="page-item" name='select_page' value="<?= $button->text ?>" formmethod="post"
                            type="submit" formaction="<?= toUrl('site/pagination') ?>"><?= $button->text ?></button>
                </form>

            <?php else : ?>
                <span style="color:red"><?= $button->text ?></span>
            <?php endif;
        endforeach; ?>
    </form>


    <footer>
        <p align="center">&copy; My_Company <b><?= date('Y') ?></b></p>
    </footer>
</div> <!-- /container -->

<!-- jQuery -->
<script src="/examples/vendors/jquery/jquery-3.3.1.min.js"></script>
<!-- Popper -->
<script src="/examples/vendors/popper.js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/examples/vendors/bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>