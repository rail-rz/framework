<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 5:57
 * To change this template use File | Settings | File Templates.
 * @var AdminAnswerController $questions;
 * @var AdminAnswerController $answers;
 */
?>

<form action='' method='post'>
<?php
    foreach($questions as $key=>$question)
    {
        $questionId=$question['id'];
        $questionText=$question['question'];
        echo "<div id='poll'><div id='question'>".++$key."<textarea name='question[$questionId]' cols='60'>$questionText</textarea></div>";
        foreach($answers as $answer)
        {
            if($question['id']==$answer['question_id'])
            {
                $answerText=$answer['answer'];
                $answerId=$answer['id'];
                echo"<div id='answer'><textarea name='answer[$answerId]' cols='60'>$answerText</textarea></div>";
            }
        }
        echo"</div>";
    }
;?>
<p><input type="submit"></p>
</form>
