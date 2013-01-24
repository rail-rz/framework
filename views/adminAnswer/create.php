<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 19.01.13
 * Time: 15:11
 * To change this template use File | Settings | File Templates.
 *
 * @var $question
 */
?>
<h2><?= $question['question']; ?></h2>

<form action="" method="post">
    <table id="table_container">
        <tr><td>Введите варианты ответов</td></tr>
        <tr><td><textarea name="answers[]" rows="1" cols="40"></textarea></td></tr>
        <tr><td><textarea name="answers[]" rows="1" cols="40"></textarea></td></tr>
    </table>
    <input type="button" value="Добавить поле" id="add" onclick="return add_new_image();">
    <input type="submit" value="Отправить">
</form>