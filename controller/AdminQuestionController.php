<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 22.01.13
 * Time: 17:38
 * To change this template use File | Settings | File Templates.
 */
class AdminQuestionController extends Controller
{

    public function actionIndex()
    {
        if(isset($_GET['poll_id']))
        {
            $poll = Application::getInstance()->fetchers->poll->getById( $_GET['poll_id'] );
            $questions = Application::getInstance()->fetchers->questions->getByPollId( $_GET['poll_id'] );
            $this->render('index', array('poll' => $poll, 'questions' => $questions ));
        }
        else
        {
            header("Location: /index.php?r=adminPoll/create");
        }
    }

    public function actionCreate()
    {
        if(!isset($_POST['question']))
        {
            $this->render('create', array());
        }
        else
        {
            $question_id = Application::getInstance()->fetchers->questions->addString($_POST['question'],$_GET['poll_id']);
            header("Location: /index.php?r=adminAnswer/create&question_id=$question_id");
        }
    }

    public function actionUpdate()
    {
        $question = Application::getInstance()->fetchers->questions->getById( $_GET['id']);
        if(isset($_POST['text']) and $_POST['text'] !== $question['question'])
        {
            Application::getInstance()->fetchers->questions->updateById($_POST['text'], $_GET['id']);
            $poll_id=$question['poll_id'];
            header("Location: /index.php?r=adminQuestion/index&poll_id=$poll_id");
        }
        else
        {
            $this->render('update', array('question' => $question));
        }
    }

    public function actionDelete()
    {
        $questions = Application::getInstance()->fetchers->questions->getById($_GET['id']);
        Application::getInstance()->fetchers->questions->delete($_GET['id']);
        $poll_id = $questions['poll_id'];
        header("Location: /index.php?r=adminQuestion/index&poll_id=$poll_id");
    }
}
