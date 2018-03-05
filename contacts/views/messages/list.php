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
    <h1>message exchange</h1>
<div class="lef">

        <form action="<?= toUrl ('messages/create')?> " method="POST">
            <label for="name"><span>Author's name</span></label>
            <input type="text" class="name" name="author" placeholder="Enter your name" class=""><br>
            <p class="label">Your message</p>
            <textarea class="messag" id="messag"name="message" placeholder="Enter your message" id="" cols="30" rows="10"></textarea><br>
            <input type="hidden" name="date" value="<?=date('d/m/y/g:i:s')?>">
            <input type="hidden" name="time" value="<?=time()?>">
            <input id="send" type="submit" value="">
            <input  type="submit" id="edit"  formmethod="post" value=""  formaction="<?= toUrl('messages/editing')?>">


        </form>
    </div>
    <div class="rig">
        <p>Message History</p>

        <table>
            <tr>
                <th>Author</th>
                <th>Messages</th>
                <th>date</th>
            </tr>


            <tr>
               <?php foreach ($messages as $message):?>

            </tr>
            <tr>
                <td><?= $message['author']?></td>
                <td><?= $message['message']?></td>
                <td><?=$message['date']?></td>


                <?php endforeach; ?>
            </tr>
        </table>
    </div>
</main>
<footer>
    <span>&copy; <?= date('Y')?> PHP Academy</span>
</footer>

</body>
</html>
