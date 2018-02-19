<?php
/**
 * @var string $name
 * @var array $messages
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
    <h1>Upload file</h1>

    <form action="<?= toUrl('/files/uploadFile') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="path" value="<?= $path ?>">
        <input type="file" name="file[]" multiple>

        <input type="submit" value="Upload" class="btn btn-success">
    </form>


</main>
<footer>
    <span>&copy; <?= date('Y')?> PHP Academy</span>
</footer>

</body>
</html>
