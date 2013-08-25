<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 23.12.12
 * Time: 0:37
 * To change this template use File | Settings | File Templates.
 */
class PollController extends Controller
{
    public function actionCreate()
    {
        $this->render('create', array());
    }

    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionSendPoll()
    {
        $poll= Application::getInstance()->fetchers->poll->getByOpenAttribute();
        $questions = Application::getInstance()->fetchers->questions->getByPollId($poll['id']);
        $answers = Application::getInstance()->fetchers->answers->getByPollId($poll['id']);

        if(!empty($_POST['answer']))
        {
            Application::getInstance()->fetchers->vote->addStrings($_POST['answer'],$poll['id']);
            header("Location: /index.php?r=vote/index");
        }
        $this->render('sendPoll', array('poll'=>$poll, 'questions' => $questions, 'answers' => $answers ));
    }

}
