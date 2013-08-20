<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 04.01.13
 * Time: 17:33
 * To change this template use File | Settings | File Templates.
 */
?>
 <h1><?php echo $poll['name']; ?></h1>

 <form method="post" action="">
    <?php foreach($questions as $question)
    {
        echo "<p>".$question['question']."</p>";
        //далее идет очень грубая работа, ее лучше уростить
        foreach($answers as $answer)
        {
            if($question['id'] == $answer['question_id'])
                echo '<input type="radio" name="answer['.$question['id'].']" value="'.$answer['id'].'">'.$answer['answer'];
        }
    }?>
     <input type="submit" value="save" />
 </form>
<?php var_dump($_POST);?>