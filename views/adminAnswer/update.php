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
    <?php foreach( $questions as $key => $question ) { ?>

<div class="poll">
    <div class="question">
        <?= ++$key; ?>.<textarea name=question[<?=$question['id'];?>] cols='60'><?=$question['question'];?></textarea>
    </div>

    <?php foreach( $answers as $answer ) {
        if($question['id'] == $answer['question_id']) { ?>
            <div class="answer">
                <textarea name='answer[<?=$answer['id'];?>]' cols='60'><?=$answer['answer'];?></textarea>
            </div>
</div>
<? }}}; ?>
    <input type="submit">
</form>