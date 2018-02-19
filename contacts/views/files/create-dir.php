<?php
/**
 * @var string $name
 * @var $path
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





    <h1>Enter new directory name</h1>

    <form action="<?= toUrl('/files/createDir') ?>" method="post">
        <input type="hidden" name="path" value="<?= $path ?>">
        <input type="text" name="dir_name" placeholder="Directory name" class="form-control mb-2">

        <input type="submit" class="btn btn-success" value="Create">
    </form>

</main>
<footer>
    <span>&copy; <?= date('Y')?> PHP Academy</span>
</footer>

</body>
</html>
