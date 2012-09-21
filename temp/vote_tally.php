<?php
/**
 * Результат голосования
 * User: R2
 * Date: 31.07.12
 * Time: 22:36
 * To change this template use File | Settings | File Templates.
 */
require_once("vote_config.php");
$poll=$_REQUEST['poll'];
if(!is_numeric($poll))
{
    die('Invalid answer');
}
//Получаем вопрос голосования
$sql="SELECT question
FROM poll
WHERE id=$poll";
$result=@mysql_query($sql,$db) or die ("mysql error:".mysql_error());
if(mysql_num_rows($result)!=1) die ('Invalid poll');
$row=mysql_fetch_array($result);//возвращение строки результата в виде списка с соотв. ему числ индксом
$question=$row["question"];
$query="SELECT COUNT(*) AS num_total_votes
FROM vote v
WHERE v.id=$poll";
$result=@mysql_query($query,$db) or die("mysql error :".mysql_error());
$row=mysql_fetch_array($result);
$num_total_votes=$row["num_total_votes"];
$query="SELECT a.answer, a.poll_id, COUNT(v.poll_id) AS num_votes
FROM answer A
LEFT JOIN vote v
ON v.id=a.id
AND v.poll_id=a.poll_id
WHERE a.id=$poll
GROUP BY a.poll_id
ORDER BY num_votes DESC,a.answer ASC";
$result=@mysql_query($query,$db) or die(mysql_error());
echo"<ul style='list-style-type: none;'>";
echo"<li style='font-weight:bold;padding-bottom: 10px;'></li>";
echo"Голосование №$poll<br>$question";
echo"</li>";
while($row=mysql_fetch_array($result))
{
    if($num_total_votes!=0)
    {
        $count_votes=sprintf("%.2f",$row["num_vote"]);
    }
    else
    {
        $count_votes=0;
    }
}
