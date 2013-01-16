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
    <p>
        <?php
        $value=$poll['name'];
        echo"<div id='pollNumber'><div id='pollName'>Опросник №".$poll['id']."</div>";
//        echo"<input type='text' size='60' name='pollName' value=$value>";
        echo"<textarea name='text' cols='60'>$value</textarea></div>"
        ?>
    </p>
    <p><input type="submit" value="Send"></p>
</form>