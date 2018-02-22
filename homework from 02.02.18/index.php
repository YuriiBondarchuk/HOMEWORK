<?php include '1.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная </title>

</head>
<body>

    <h1>Файлы загруженые на сайт </h1>

    <table>
        <tr>
            <td colspan="4">Ваши загруженые картинки: </td>
        </tr>
        <?php foreach (outputFile('img') as $value):?>
            <tr>
                <td>
                <?php foreach ($value as $item):?>
                    <td><img src="img/<?=$item?>"> </td>
                <?php endforeach;?>

            </tr>
        <?php endforeach;?>
    </table>
<p>Вашы загруженые файлы:</p>
    <ol>

        <?php foreach (outputFile("doc") as $value1):?>
            <li>
                <b><?=$value1?></b>
            </li>

        <?php endforeach;?>
    </ol>

    <div><a  href="1.html">Загрузить новые файлы</a></div>

</body>
</html>