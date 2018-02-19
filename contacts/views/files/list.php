<?php
/**
 * @var string $name
 * @var array $messages
 * @var $data
 * @var $currentDir
 */
?>


<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?=toUrl("views/messages/style/style.css")?>" type="text/css">

    <meta charset="UTF-8">

    <title>Messages list</title>
</head>
<body>


<main>


    <h1>Files list</h1>
    <ul>
        <li><a href="<?= toUrl('/files/createDir?path=' . urlencode($currentDir)) ?>"> Create directory</a></li>
        <li><a href="<?= toUrl('/files/uploadFile?path=' . urlencode($currentDir)) ?>">Upload file</a></li>
    </ul>

    <ul>
        <?php foreach ($data as $item) : ?>
            <li class="fa<?= $item['is_dir'] ? '-fold' : '-file' ?>">
                <a class="" href="<?= $item['url'] ?>">
                    <?= $item['name'] ?>
                </a>
                <a href="<?= $item['is_dir'] ? toUrl('/files/deleteDir?path='. urlencode($currentDir . '/' . $item['name'])) : toUrl('/files/deleteFile?path='. urlencode($currentDir . '/' . $item['name'])) ?>">
                    <img src="<?=toUrl("views/files/icons/delete.ico")?>" alt="delete">
                </a>

            </li>
        <?php endforeach; ?>
    </ul>

</main>
<footer>
    <span>&copy; <?= date('Y')?> PHP Academy</span>
</footer>

</body>
</html>
