<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 22.01.13
 * Time: 17:40
 * To change this template use File | Settings | File Templates.
 *
 * @var $questions array
 * @var $poll array
 */
?>
<h1><?= $poll['name']; ?></h1>
<p><a href='/index.php?r=adminQuestion/create&poll_id=<?= $poll['id']; ?>'> Добавить вопрос</a></p>
<table border='1'>
    <?php foreach($questions as $key => $question) { ?>
    <tr>
        <td><?= ++$key; ?></td>
        <td><a href='/index.php?r=adminQuestion/update&id=<?= $question['id']; ?>'><?= $question['question']; ?> </a></td>
        <td>
            <a href='/index.php?r=adminAnswer/create&question_id=<?= $question['id']; ?>'>Вопросы</a>
            <a href='/index.php?r=adminQuestion/delete&id=<?= $question['id']; ?>'>Удалить</a>
        </td>
    </tr>

    <?php } ?>
</table>