<? //=var_dump($_POST,$_REQUEST)?>
<!doctype html>
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
<? if (isset($_SESSION['name'])): ?>
    <h3>Hello, <i><?= $_SESSION['name'] ?></i></h3>
<? endif; ?>
<br>
<br>
<h2>List of books</h2>

<!--Выход из сессии-->

<form action="Exit.php" method="post">
    <button type="submit" name="exit" class="btn btn-warning">Sign Out</button>
</form>
<!--END-->
<!--Выбор языка для отображения-->
<form class="form-group">
    <label for="select">Select language</label>
    <select class="form-control" id="select">
        <option selected value="ukr">Ukraine</option>
        <option value="en">English</option>

    </select>
    <button type="button" name="send" onclick="send_zapros()" class="btn btn-warning">Select</button>
</form>
<!--END-->
<br><br>
<br>
<!--Главная таблица с книгами и авторами-->
<table class="table table-hover" id="table_id">
    <tr>
        <td><b>Name books</b></td>
        <td><b>Author</b></td>
    </tr>
    <? foreach ($zapros_author

    as $key => $value): ?>
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
<!--END-->

</body>
</html>