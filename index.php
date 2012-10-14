<?php
/**
 * Index
 * User: R2
 * Date: 05.09.12
 * Time: 23:49
 * To change this template use File | Settings | File Templates.
 */
require_once "Application.php";
require_once "ComponentManager.php";
require_once "db.php";
require_once "models/AnswerFetcher.php";
require_once "models/Fetcher.php";
require_once "controller/AnswerController.php";
require_once "controller/ErrorController.php";

$componentManager = new ComponentManager(array('answer' => array('class' => 'AnswerFetcher'),'poll' => array('class' => 'PollFetcher')));
$answerFetcher = $componentManager->answer;
var_dump($answerFetcher->getById(1));
var_dump($answerFetcher->getByPollId(1));

Application::init(array ("db"=>(array("host"=>'localhost',"user"=> 'root',"password"=> '',"base"=> 'poll'))));
Application::getInstance()->run();