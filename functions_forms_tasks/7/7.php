<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мини гостевая книга </title>

</head>
<!--/**-->
<!--* Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.-->
<!--* Все добавленные комментарии выводятся над текстовым полем.-->
<!--*/-->
<body>
<?php

$post = $_POST['message'];
$file = fopen('storage.txt','a');
fwrite($file,$post."\n");
fclose($file);
$message = file('storage.txt');

//var_dump($message);die;
?>
<style>
    table {
        display: block;
        width : 200px;
        height:200px;
        border: 2px solid;
        overflow: auto;
    }
</style>

<h2 align="center">Гостевая книга </h2>

<h3>Коментарии</h3>
<table >

<?php foreach ($message as $value):?>
    <tr>
        <td><b>Коментарий: </b><?=$value?></td>
    </tr>
<?php endforeach;?>

</table>
<form action="" method="POST">
    <textarea name="message" id="" cols="30" rows="10" placeholder="Введите своё сообщение"></textarea><br>
    <input type="submit" value="Send">

</form>

</body>
</html>
