<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <title>Title</title>
</head>
<body>



<div class="container">

<!--    Проверяем существует ли глобальная переменная $_SESSION['name']-->

<!--    Выводим форму ели не существует-->

    <? if (!isset($_SESSION['name'])): ?>
        <form method="post" action="class/authorizing.php">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>

                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="inputPassword3"
                           placeholder="Password">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>

<!--    Выводим приветствие если вход выполнен -->

    <? elseif(isset($_SESSION['name'])): ?>
        <h3>Hello <?= $_SESSION['name'] ?></h3>
    <? endif; ?>
</div>

</body>
</html>