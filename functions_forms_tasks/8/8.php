<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мини гостевая книга </title>

</head>

<!-- 8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
     Все добавленные комментарии выводятся над текстовым полем. Реализовать проверку на наличие в тексте запрещенных слов, матов.
    При наличии таких слов - выводить сообщение "Некорректный комментарий".
    Реализовать удаление из комментария всех тегов, кроме тега <b>.
-->
<body>
<?php

$post = $_POST['message'];
//var_dump($post);die;
//масив запрещенных слов
$mat = ['идиот','псих','дурак'];
foreach ($mat as $value){
   if ($value==$post){

       unset($post);
   }
}
if (!isset($post)){
    echo "<b class='com'><i>Некоректный коментарий<br> Введите заново </i></b>";

}
else {
    $file = fopen('storage.txt','a');
    $string = strip_tags($post,'<b>');
    fwrite($file,$string."\n");
    fclose($file);
    $message = file('storage.txt');
}



?>
<style>
    table {
        display: block;
        width : 200px;
        height:200px;
        border: 2px solid;
        overflow: auto;
          }
    b.com   {
        color: red;

    }
</style>

<h2 align="center">Гостевая книга </h2>

<h3>Коментарии</h3>
<table >

    <?php if(isset($post)): ?>
<?php foreach ($message as $value):?>
    <tr>
        <td><b>Коментарий: </b><?=$value?></td>
    </tr>
<?php endforeach;?>
    <?php endif;?>

</table>
<form action="" method="POST">
    <textarea name="message" id="" cols="30" rows="10" placeholder="Введите своё сообщение"></textarea><br>
    <input type="submit" value="Send">

</form>

</body>
</html>
