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
foreach($polls as $poll)
{
    echo"<div>";
    $numberPoll=$poll['id'];
    echo$numberPoll.".".$poll['name']."<br>";
    echo"1.<a href='/index.php?r=adminPoll/update&id=$numberPoll'>Редактировать опрос</a><br>";
    echo"2.<a href='/index.php?r=adminAnswer/update&poll_id=$numberPoll'>Редактировать вопросы</a><br>";
    echo"3.<a href='/index.php?r=adminPoll/delete&id=$numberPoll'>Удалить Опрос</a><br>";
    echo"4.<a href='/index.php?r=adminPoll/check&id=$numberPoll'>Открытый/Закрытый опросник</a><br>";
    echo"</div><br>";
}
?>