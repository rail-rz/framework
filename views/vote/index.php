<h1><?= $poll['name']; ?></h1>
<div>
    <table>
        <?php foreach($questions as $question){
            echo '<tr>';
            echo '<td>'.$question['question'].'</td>';
            echo '<td> кол-во голосов'. Application::getInstance()->fetchers->vote->countQuestion($question['id']).'</td>';
            echo '</tr>';
            //далее идет очень грубая работа, ее лучше уростить

            foreach($answers as $answer) {
                if($question['id'] == $answer['question_id']){
                    echo '<tr>';
                    echo '<td>'.$answer['answer'].'</td>';
                    echo '<td>'.Application::getInstance()->fetchers->vote->countAnswer($answer['id']).'</td>';
                    echo '</tr>';}}} ?>
    </table>
</div>