<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 26.12.12
 * Time: 4:23
 * To change this template use File | Settings | File Templates.
 */
?>
<? echo $pollText['name']."<br>" ?>
<form action=''>
<?
echo"<br>";
foreach($pollQuestion as $key=>$question)
{
    echo $question['question']."<br>";
    if($question['is_multiple']==0)
        $multiple="checkbox";
    else
        $multiple="radio";
    foreach($answer as $answers)
    {
        if($question['id']==$answers['question_id'])
        {
//            echo$answers['answer']."<br>";
            $answerId=$answers['id'];
            $name=array();
            $name="answer[$answerId]";
            echo"<p><input type=$multiple name=$name value=$answerId>".$answers['answer']."<br>";
        }
    }
}
;?>
</p>
<p><input type="submit"></p>
    </form>
    <?php
//var_dump($_GET['answer']);
?>