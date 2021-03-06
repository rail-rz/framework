<?php
/**
 * Index
 * User: R2
 * Date: 05.09.12
 * Time: 23:49
 * To change this template use File | Settings | File Templates.
 */
header("Content-Type: charset=utf-8");
require_once "ComponentManager.php";
require_once "Application.php";
require_once "db.php";
require_once "models/Fetcher.php";
require_once "models/VoteFetcher.php";
require_once "models/AnswerFetcher.php";
require_once "models/QuestionsFetcher.php";
require_once "models/PollFetcher.php";
require_once "controller/Controller.php";
require_once "controller/PollController.php";
require_once "controller/AnswerController.php";
require_once "controller/VoteController.php";
require_once "controller/ErrorController.php";
require_once "controller/AdminPollController.php";
require_once "controller/AdminAnswerController.php";
Application::init(
    array(
        'components' => array(
            'fetchers'=>array(
                'class' => 'ComponentManager',
                '__construct' => array(
                    array(
                        'components' => array(
                            'answers' => array('class' => 'AnswerFetcher'),
                            'poll' => array('class' => 'PollFetcher'),
                            'questions' => array('class' => 'QuestionsFetcher'),
                            'vote' => array( 'class' => 'VoteFetcher'),
                        )
                    )
                )
            ),
            'db' => array('class' => 'db','__construct' => array('localhost', 'root', '', 'poll')),
        )
    )
);
Application::getInstance()->run();
