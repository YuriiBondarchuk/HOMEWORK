<?php
//require_once '../DBwork/DBwork.php';
require_once 'sample/sample.php';


//var_dump($x,$title);

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
        <!--        </div><!--/.navbar-collapse -->-->
    </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello my friend!</h1>
        <p> This is an information site.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Search</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">

            <h2>Business</h2>
            <ul >
                <?php $title = $db->query(SELECT_T,$business.' LIMIT 5');?>
                <?php foreach ($title as $item):?>
                    <li> <?=$item['title']; ?></li>
                <?php endforeach;?>
            </ul>
            <form >
                <button class="btn btn-default" type="submit" name='name'  formmethod="post" value="business"  formaction="<?= toUrl('site/list')?>">View details</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Cinema</h2>
            <?php $title = $db->query(SELECT_T,$cinema.' LIMIT 5');?>
            <?php foreach ($title as $item):?>
                <li> <?=$item['title']; ?></li>
            <?php endforeach;?>
            <form >
                <button class="btn btn-default" type="submit" name='name'  formmethod="post" value="cinema"  formaction="<?= toUrl('site/list')?>">View details</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Fashion</h2>
            <?php $title = $db->query(SELECT_T,$fashion.' LIMIT 5');?>
            <?php foreach ($title as $item):?>
                <li> <?=$item['title']; ?></li>
            <?php endforeach;?>
            <form >
                <button class="btn btn-default" type="submit" name='name'  formmethod="post" value="fashion"  formaction="<?= toUrl('site/list')?>">View details</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Sport</h2>
            <?php $title = $db->query(SELECT_T,$sport.' LIMIT 5');?>
            <?php foreach ($title as $item):?>
                <li> <?=$item['title']; ?></li>
            <?php endforeach;?>
            <form >
                <button class="btn btn-default" type="submit" name='name'  formmethod="post" value="sport"  formaction="<?= toUrl('site/list')?>">View details</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Style</h2>
            <?php $title = $db->query(SELECT_T,$style.' LIMIT 5');?>
            <?php foreach ($title as $item):?>
                <li> <?=$item['title']; ?></li>
            <?php endforeach;?>
            <form >
                <button class="btn btn-default" type="submit" name='name'  formmethod="post" value="style"  formaction="<?= toUrl('site/list')?>">View details</button>
            </form>
        </div>

    </div>
    <hr>

<!--    Карусель-->
    <!-- Контент страницы -->
    <div class="container text-center">
        <div id="carousel" class="carousel slide" data-ride="carousel" style="display: inline-block;">
            <!-- Индикаторы -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">


                <img src="<?= toUrl('img/sport')."/".$sort_date[0]['id'].".jpg"?>" alt="...">
                    <div class="carousel-caption">
                        <h3><?php $id = (int)$sort_date[0]['id'] ?><?= $db->query(SELECT_T,"sport WHERE id=$id")[0]['title']?></h3>

                    </div>
                </div>
                <div class="item">
                    <img src="<?= toUrl('img/sport')."/".$sort_date[1]['id'].".jpg"?>" alt="...">
                    <div class="carousel-caption">
                        <h3><?php $id = (int)$sort_date[1]['id'] ?><?= $db->query(SELECT_T,"sport WHERE id=$id")[0]['title']?></h3>

                    </div>
                </div>
                <div class="item">
                    <img src="<?= toUrl('img/sport')."/".$sort_date[2]['id'].".jpg"?>" alt="...">
                    <div class="carousel-caption">
                        <h3><?php $id = (int)$sort_date[2]['id'] ?><?= $db->query(SELECT_T,"sport WHERE id=$id")[0]['title']?></h3>

                    </div>
                </div>
            </div>
            <!-- Элементы управления -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Предыдущий</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Следующий</span>
            </a>
        </div>

    </div>

    <hr>

    <footer>
        <p align="center">&copy; My_Company <b><?=date('Y')?></b></p>
    </footer>
</div> <!-- /container -->

</body>
</html>