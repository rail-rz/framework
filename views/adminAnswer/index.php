<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 21.01.13
 * Time: 2:54
 * To change this template use File | Settings | File Templates.
 *
 * @var $question
 * @var $answers
 */
?>
<h1><?= $question['question']; ?></h1>
<table>
    <?php foreach($answers as $key => $answer) { ?>
        <tr>
            <td><?= ++$key; ?></td>
            <td><a href='/index.php?r=adminAnswer/update&answer_id=<?= $answer['id']; ?>'> <?= $answer['answer']; ?></a></td>
            <td><a href='/index.php?r=adminAnswer/delete&answer_id=<?= $answer['id']; ?>'>Удалить</a></td>
        </tr>
    <?php } ?>
</table>
<form action="" method="post">
    <table id="table_container"></table>
    <input type="button" value="Добавить поле" id="add" onclick="return add_new_image();">
    <input type="submit" value="Отправить">
</form>
