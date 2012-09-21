<?php
/**
 * добавление результатов голосование в БД
 * User: R2
 * Date: 30.07.12
 * Time: 21:10
 *
 */
require_once("vote_config.php");
$poll=$_POST['poll'];
$answer=$_POST['answer'];
if(!is_numeric($poll)||!is_numeric($answer))
{
    die("Invalid poll or answer.");
}
$sql="SELECT a.poll_id,
FROM poll p,answer a
WHERE p.id=a.id
AND p.id=$poll
AND a.poll_id=$answer";
$result=@mysql_query($sql,$db) or die (mysql_error());
if(mysql_num_rows($result)==0)
{
    die ('Invalid poll or answer.');
}
header("Location:vote_tally.php?poll=$poll");
?>