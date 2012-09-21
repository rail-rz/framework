<?php
/**
 * Форма для голосования
 * User: R2
 * Date: 30.07.12
 * Time: 21:40
 * To change this template use File | Settings | File Templates.
 */
require_once("vote_config.php");
$poll=$_GET['poll'];
if(!is_numeric($poll))
{
    die("Invalid poll");
}
$sql="SELECT p.question, a.answer, a.poll_id, a.is_multiple,
FROM poll p, answer a
WHERE p.id=$poll
AND a.id=p.id
AND a.is_multiple=$is_multiple";
$result=mysql_query($sql,$db) or die ("mysql error:".mysql_error());
if(mysql_num_rows($result)==0)
{
    die('Invalid poll 2');
}
//Форма для голосований
$question_list="";//Цикл автоматически загоняет серию радиокнопок в переменную $question_list
while($row=mysql_fetch_array($result))
{
    $question=$row['question'];
    if($is_multiple==1)
    {
        $question_list .= '<li><input name="answer" type="radio" value=""'.$row['poll_id'].'">'.$row['answer'].'</li>';
    }
    if($is_multiple==0)
    {
        $question_list .= '<li><input name="answer" type="checkbox" value=""'.$row['poll_id'].'">'.$row['answer'].'</li>';
    }
}
?>
<span>
    <span><br>
        Pool #<?php print $poll?>
    </span><br>
    <span>
        <?php print $question; ?>
    </span>
    <form action="vote_process.php" method="post">
        <ul>
            <?php print $question_list; ?>
        </ul>
        <input name="poll" type="hidden" value="<?php print $poll;?>">
        <input name="" type="submit" value="CHECK!">
    </form>
</span>