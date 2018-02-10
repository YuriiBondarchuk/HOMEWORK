<?php
/**
* @var string $name
 * @var array $messages
*/
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages list</title>
</head>
<body>
<main>
    <h1>Messanger List</h1>
    <form action="<?= toUrl('messages/create')?> " method="POST">
        <input type="text" name="author" placeholder="Enter your name" class=""><br>
        <textarea name="message" placeholder="Enter your message" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Save">
    </form>
    <table>
        <?php foreach ($messages as $message):?>
        <tr>
            <td><?= $message['author']?></td>
            <td><?= $message['message']?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
<footer>
    <span>&copy; <?= date('Y')?> PHP Academy</span>
</footer>

</body>
</html>