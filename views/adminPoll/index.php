<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 4:55
 * To change this template use File | Settings | File Templates.
 * @var AdminPollController $polls
 */
?>
<h1>Опросники</h1>
<p><a href="/index.php?r=adminPoll/create">Создать опрос</a> </p>
<?php
    foreach($polls as $poll){
        $numberPoll=$poll['id'];
?>
<table border='1'>
    <tr><td>
    <div id='list'>
        <div><?echo$numberPoll.".".$poll['name'];?></div>
        <div>1.<a href='/index.php?r=adminPoll/update&id=<?echo$numberPoll?>'>Редактировать опрос</a></div>
        <div>2.<a href='/index.php?r=adminAnswer/update&poll_id=<?echo$numberPoll?>'>Редактировать вопросы</a></div>
        <div>3.<a href='/index.php?r=adminPoll/delete&id=<?echo$numberPoll?>'>Удалить Опрос</a></div>
        <div>4.<a href='/index.php?r=adminPoll/check&id=<?echo$numberPoll?>'>Открытый/Закрытый опросник</a></div>
    </div>
    </td></tr>
</table>
<?
    }
?>