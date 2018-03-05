<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контактная форма </title>
</head>
<body>
    <h3> Введите даные автомобиля:</h3>
    <form action="script.php" method="post">
        <label for="brand">Марка автомобиля :</label><br>
        <input type="text" id="brand" name="brand">
        <label for="model">Модель автомобиля:</label><br>
        <input type="text" id="model" name="model">
        <label for="year">Год выпуска</label><br>
        <input type="text" id="year" name="year">

        <input type="submit" value="Send">



    </form>

</body>
</html>