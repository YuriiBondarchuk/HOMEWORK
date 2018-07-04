<?php
//require_once '../DBwork/DBwork.php';
require_once 'sample/sample.php';



>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
$name = $_GET['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="../script/NoDelete.js"></scriptty>


      
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>

        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link href="../style/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/my_style.css">

    <title>News Site</title>
    <!-- Custom styles for this template -->



>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <a align="right" style="right: 0px" class="navbar-brand" href="<?= toUrl('site/admin_exit') ?>">
        <button class="btn btn-warning">EXIT</button>
    </a>
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e

</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h3>Admin Panel</h3>

    </div>
</div>

<div class="container">
    <!-- Example row of columns -->

    <h1>Category: <span><?= $name ?></span></h1>
    <form action="<?= toUrl("site/admin_tables_save?name={$new_insert}&new_page=ok") ?>" method="post">
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
        <label for="title">Title</label>
        <input class="form-control" type="text" value="" name="title" id="title">


        <textarea class="form-control" name="content"  id="content" cols="50" rows="30"></textarea>

        <textarea class="form-control" name="content" id="content" cols="50" rows="30"></textarea>
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
        <input class="btn btn-success" type="submit" value="SAVE">

    </form>

    </table>


>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
</div>
<hr>


<hr>

<footer>

    <p align="center">&copy; My_Company <b><?= date('Y') ?></b></p>
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
</footer>
</div> <!-- /container -->

</body>
</html>