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
    public function actionUpdate()
    {
        $pollId=$_GET['poll_id'];
        $questions=Application::getInstance()->fetchers->questions->getByPollId($pollId);
        $answers=Application::getInstance()->fetchers->answers->getByPollId($pollId);
        $this->render('update', array('questions'=>$questions,'answers'=>$answers));
    }

}
