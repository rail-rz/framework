<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 26.12.12
 * Time: 4:23
 * To change this template use File | Settings | File Templates.
 */
?>
<? echo $pollText['text_poll']."<br>" ?>
<form action=''>
<?
echo"<br>";
foreach($pollQuestion as $key=>$question)
{
    echo $question['text_question']."<br>";
    if($question['is_multiple']==0)
        $multiple="checkbox";
    else
        $multiple="radio";
    foreach($answer as $answers)
    {
        if($question['id']==$answers['poll'])
        {
//            echo$answers['answer']."<br>";
            $answerId=$answers['id'];
            echo"<p><input type=$multiple name='answer' value=$answerId>".$answers['answer']."<br>";
        }
    }
}
;?>
</p>
<p><input type="submit"></p>
    </form>