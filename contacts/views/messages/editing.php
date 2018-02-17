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


<form class="editing" action="<?= toUrl('messages/delete')?>" method="POST">
      <?php foreach ( $messages as $message):?>
       <input type="checkbox" checked name="<?=$message['id'];?>"><?php echo"Author:==>{$message['author']} <<<>>>  Messages: ==> {$message['message']} "?><br>
    <?php endforeach;?>
    <input type="submit" id="delete" value=""src="../image/delete.bmp">
    <input type="submit" id="change" value=""src="../image/change.bmp" formaction="<?= toUrl('messages/edit')?>" formmethod="post">
</form>

    </div>
</main>
<footer>
    <span>&copy; <?= date('Y')?> PHP Academy</span>
</footer>

</body>
</html>
