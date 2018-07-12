<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="../script/NoDelete.js"></scriptty>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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

</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h3>Admin Panel</h3>

    </div>
</div>

<div class="container">
    <h5><?= (isset($nologin)) ? $nologin : '' ?></h5>
    <h3 align="center">Authorization</h3>
    <form action="<?= toUrl('site/Adminauthor') ?>" method="post">
        <div class="form-group">
            <label for="login"> Login</label>
            <input type="text" id="login" name="login" class="form-control">
        </div>
        <div class="form-group">
            <label for="password"> Password</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <input type="submit" class="btn btn-success" value="Sign in">
    </form>


</div>
<hr>
<footer>
    <p align="center">&copy; My_Company <b><?= date('Y') ?></b></p>
</footer>
</div>

</body>
</html>