<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 4:07
 * To change this template use File | Settings | File Templates.
 */
class AdminAnswerController extends Controller
{
    public function actionIndex()
    {
        $question = Application::getInstance()->fetchers->questions->getById( $_GET['question_id'] );
        $answers = Application::getInstance()->fetchers->answers->getByQuestionId($_GET['question_id']);
        if(!empty($_POST['answers']))
        {
            $this->saveText($question['poll_id']);
            $questionId = $_GET['question_id'];
            header("Location: /index.php?r=adminAnswer/index&question_id=$questionId");
        } else {
            $this->render( 'index', array( 'question' => $question, 'answers' => $answers));
        }
    }

    public function actionUpdate()
    {
        $answer = Application::getInstance()->fetchers->answers->getById($_GET['answer_id']);
        if(!empty($_POST['answer']))
        {
            Application::getInstance()->fetchers->answers->updateById( $_POST['answer'], $_GET['answer_id']);
            $questionId = $answer['question_id'];
            header("Location: /index.php?r=adminAnswer/index&question_id=$questionId");
        } else {
        $this->render( 'update', array( 'answer' => $answer));
        }
    }

    public function actionCreate()
    {
        $question = Application::getInstance()->fetchers->questions->getById($_GET['question_id']);
        if(!empty($_POST['answers']['0']) and !empty($_POST['answers']['1']))
        {
            $this->saveText($question['poll_id']);
            $pollId = $question['poll_id'];
            header("Location: /index.php?r=adminQuestion/index&poll_id=$pollId");
        }
        else
        {
            $this->render('create', array( 'question' => $question));
        }
    }

    public function actionDelete()
    {
        $answer = Application::getInstance()->fetchers->answers->getById($_GET['answer_id']);
        $questionId = $answer['question_id'];
        Application::getInstance()->fetchers->answers->deleteById($_GET['answer_id']);
        header("Location: /index.php?r=adminAnswer/index&question_id=$questionId");
    }

    private function saveText($question)
    {
        foreach($_POST['answers'] as $answers)
        {
            if(!empty($answers))
                Application::getInstance()->fetchers->answers->addSting($answers, $_GET['question_id'], $question);
        }
    }

}
