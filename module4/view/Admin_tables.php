<?php
//require_once '../DBwork/DBwork.php';
require_once 'sample/sample.php';


//var_dump($sql,$_GET);die;
$name = $_GET['name'];
$table = $db->query($sql);
//var_dump($table);die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="../script/NoDelete.js"></scriptty>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <
        script
        src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="../style/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/my_style.css">

    <title>News Site</title>
    <!-- Custom styles for this template -->


</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <a align="right" style="right: 0px" class="navbar-brand" href="<?= toUrl('site/admin_exit') ?>">
        <button class="btn btn-warning">EXIT</button>
    </a>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h3>Admin Panel</h3>

    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <h1><?= $name ?></h1>
    <table class="table table-hover">

        <?php foreach ($table as $table) : ?>
            <tr>
                <th scope="row"><?= $table ['id'] ?></th>
                <td><?= $table ['title'] ?></td>
                <td align="right">
                    <a href="<?= toUrl("/site/admin_tables_edit?id= {$table['id']}&name={$name}") ?>">
                        <button class="btn btn-primary">EDIT</button>
                    </a>
                    <a href="<?= toUrl("/site/admin_tables_delete?id={$table['id']}&name={$name}") ?>"
                       onclick="return NoDelete()">
                        <button class="btn btn-danger">DELETE</button>
                    </a>
                </td>

            </tr>

            <!--            <button class="btn">DELETE</button>-->
        <?php endforeach; ?>
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e


    </table>
    <div>
        <a href="<?= toUrl("/site/admin_new_page?name={$name}") ?>">
            <button class="btn btn-primary">NEW PAGE</button>
        </a>
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
    </div>

</div>
<hr>


<hr>

<footer>
    <p align="center">&copy; My_Company <b><?= date('Y') ?></b></p>
</footer>
</div> <!-- /container -->

</body>
</html>