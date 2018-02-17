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

    <title>HELLO</title>
</head>
<body>
<main>
    <h1>Exchange messaging editing</h1>
<div class="lef">


<form class="edit" action="<?= toUrl('messages/edit_new')?>" method="POST">

    <?php foreach ( $messages as $key => $message):?>

        <label for="author"><span>Author</span></label>
        <input class="edit" type="text" name="<?=$message['id']?>" value="<?=$message['author']?>"><br>
        <p class="label">Messages</p>
        <textarea class="messag" name="<?=$message['id'].'a'?>" id="message" cols="30"rows="10"><?=$message['message']?></textarea><br>
        <input type="hidden" name="date" value="<?=date('d/m/y/g:i:s')?>">
        <input type="hidden" name="time" value="<?=time()?>">
        <?php endforeach;?>
    <input type="submit" id="chenge_edit" value="">
</form>

    </div>
</main>
<footer>
    <span>&copy; <?= date('Y')?> PHP Academy</span>
</footer>

</body>
</html>
