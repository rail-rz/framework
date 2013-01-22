<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 22.01.13
 * Time: 19:07
 * To change this template use File | Settings | File Templates.
 * @var $question
 */
?>
<form action="" method="post">
    <h2>Update Question</h2>
        <textarea name='text' cols='60'><?= $question['question']; ?></textarea>
    <p><input type="submit" value="Send"></p>
</form>