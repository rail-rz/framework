<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 05.09.12
 * Time: 23:53
 * To change this template use File | Settings | File Templates.
 */
//require_once "models/AnswerFetcher.php";
require_once "Controller.php";
class AnswerController extends Controller
{
    public function  actionIndex()
    {
//        var_dump( AnswerFetcher::getInstance()->getById("1"));
//        var_dump( AnswerFetcher::getInstance()->getByPollId("1"));
        $pollId=$_GET['poll'];
        if(!isset($pollId))
        {
            echo"выводим все варианты голосования";
        }
        else
        {
            $pollText=InterviewFetcher::getInstance()->getById($pollId);
            if(!isset($pollText['id']))
            {
                echo"такого опроса не существует";
            }
            else
            {

                $pollQuestion=PollFetcher::getInstance()->getByPollId($pollId);
                $answer=AnswerFetcher::getInstance()->getByPollId($pollId);
                $this->render('index', array('pollText'=>$pollText,'pollQuestion'=>$pollQuestion,'answer'=>$answer));
            }
        }
    }
}