<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Страница загрузки фотографий</title>
</head>

<body>
<!--Создать страницу, на которой можно загрузить несколько фотографий в галерею.-->
<!--Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.-->
<form action="" method="POST" enctype="multipart/form-data">
    <label for="text"> Выберите картинку :</label> <br>
    <input type="file" name="file[]" id="text" value="2" multiple> <br><br>
    <input type="submit" name="DOWNLOAD" value="DOWNLOAD">
</form>
<?php
$file = $_FILES;
$dir = __DIR__.'/galery/';
//var_dump($_FILES);

foreach ($file['file']['name'] as $value) {
    $name [] = $value;
}
foreach ($file['file']['tmp_name'] as $value) {
    $tmp_name [] = $value;
}
//var_dump($tmp_name,$name);
$file_galery = array_combine($name,$tmp_name);
//var_dump($file_galery);
foreach ( $file_galery as $key => $value){
    move_uploaded_file($value,$dir.$key);
}
foreach (scandir($dir) as $value){
    if($value!='.'&&$value!='..') {
        $galery[] = $value;
    }
}
$grup_galery = array_chunk($galery,3);
//var_dump($grup_galery);die;

//var_dump($galery);die;
?>
<table  border="2px solid green">

        <?php foreach ($grup_galery as $item):?>
            <tr>

                <?php foreach ($item as $value):?>

                <td>
                    <img width="100px" height="100px" src="galery/<?=$value?>" alt="">
                </td>
                <?php endforeach;?>

            </tr>
        <?php endforeach;?>

</table>

</body>

</html>
