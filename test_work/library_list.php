<?=var_dump($_POST,$_REQUEST)?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <title>Library</title>
</head>
<body>

<h2>List of books</h2>
<form action="Exit.php" method="post">
    <button type="submit" name="exit" class="btn btn-warning">Sign Out</button>
</form>
<form class="form-group" >
    <label for="select">Select language</label>
    <select class="form-control" id="select" >
        <option selected value="ukr" >Ukraine</option>
        <option value="en">English</option>

    </select>
    <button type="button" name="send" onclick="send_zapros()" class="btn btn-warning">Select</button>
</form>
<br><br>
<br>

<table class="table table-hover">
    <tr>
        <td><b>Name books</b></td>
        <td><b>Author</b></td>
    </tr>
    <? foreach ($zapros_author  as $key => $value): ?>
    <tr>

        <td><?= $key ?></td>
        <td>
            <? foreach ($value as $value2): ?>


                <? foreach ($value2 as $key3) ?>
                <?= $key3 ?>
                </br>
            <? endforeach; ?>

            <? endforeach; ?>
        </td>
    </tr>

</table>

</body>
</html>