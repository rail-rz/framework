<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 4:55
 * To change this template use File | Settings | File Templates.
 * @var $polls array
 */
?>
<h1>Опросники</h1>
<p><a href="/index.php?r=adminPoll/create">Создать опрос</a> </p>
<table border='1'>
    <?php foreach($polls as $poll) { ?>
    <tr>
        <td><?= $poll['id']; ?></td>
        <td><a href='/index.php?r=adminPoll/update&id=<?= $poll['id']; ?>'><?= $poll['name']; ?> </a></td>
        <td>
            <a href='/index.php?r=adminAnswer/update&poll_id=<?= $poll['id']; ?>'>Вопросы</a>
            <a href='/index.php?r=adminPoll/delete&id=<?= $poll['id']; ?>'>Удалить</a>
        </td>
    </tr>
    <?php } ?>
</table>