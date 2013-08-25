<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 25.08.13
 * Time: 3:06
 * To change this template use File | Settings | File Templates.
 */

class VoteController extends Controller
{

    public function actionIndex()
    {
        $poll = Application::getInstance()->fetchers->poll->getByOpenAttribute();
        $questions = Application::getInstance()->fetchers->questions->getByPollId($poll['id']);
        $answers = Application::getInstance()->fetchers->answers->getByPollId($poll['id']);

        $this->render('index', array( 'poll' => $poll, 'questions' => $questions, 'answers' => $answers ));
    }
}