<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 5:54
 * To change this template use File | Settings | File Templates.
 * @var AdminPollController $poll
 */
?>
<form action="" method="post">
<?php
    $value=$poll['name'];
?>
<div id='pollNumber'>
    <div id='pollName'>Опросник №<?echo$poll['id']?></div>
        <textarea name='text' cols='60'><?echo$value?></textarea>
</div>
    <p><input type="submit" value="Send"></p>
</form>