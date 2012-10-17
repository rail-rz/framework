<?php
/**
 * Тестовая страничка для проверки работаспособности программы
 * User: R2
 * Date: 18.10.12
 * Time: 0:26
 * To change this template use File | Settings | File Templates.
 */
require_once "index.php";
require_once "Application.php";
require_once "ComponentManager.php";
require_once "db.php";
require_once "models/AnswerFetcher.php";
require_once "models/Fetcher.php";
require_once "controller/AnswerController.php";
require_once "controller/ErrorController.php";
$componentManager = new ComponentManager(array('answer' => array('class' => 'AnswerFetcher'),
    'poll' => array('class' => 'PollFetcher')));
$answerFetcher = $componentManager->answer;
var_dump($answerFetcher->getById(1));
var_dump($answerFetcher->getByPollId(1));