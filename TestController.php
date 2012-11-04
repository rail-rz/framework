<?php
/**
 * Тестовая страничка для проверки работаспособности программы
 * User: R2
 * Date: 18.10.12
 * Time: 0:26
 * Нужно переделать данный класс
 */
require_once "index.php";
require_once "Application.php";
require_once "ComponentManager.php";
require_once "db.php";
require_once "models/AnswerFetcher.php";
require_once "models/Fetcher.php";
require_once "controller/AnswerController.php";
require_once "controller/ErrorController.php";
require_once "doc/FetcherManager.php";

//    $componentManager = new ComponentManager(array('answer' => array('class' => 'AnswerFetcher'),
//        'poll' => array('class' => 'PollFetcher'),
//        'db' => array('class' => 'db','__construct' => array('localhost', 'root', '', 'poll'),),
//    ));
//
//var_dump($componentManager->db->selectRow('SELECT * FROM answer WHERE id = ?', array(1)));
$config=array(
    'components' => array(
        'fetcher'=>array(
            'class' => 'ComponentManager',
            '__construct' => array(array(
                'components' => array(
                    'answer' => array('class' => 'AnswerFetcher'),
                    'poll' => array('class' => 'PollFetcher'),
                )
            ))
        ),

        'db' => array('class' => 'db','__construct' => array('localhost', 'root', '', 'poll'),),
    )
);

//$componentManager = new ComponentManager($config);

Application::getInstance($config)->fetcher->answer;
//Application::getInstance($config)->db->selectRow;


//var_dump($componentManager->db->selectAll('SELECT * FROM answer WHERE id = ?', array(1)));
//var_dump($componentManager->fetcher->answer->getById(1));
//var_dump($componentManager->fetcher->poll->getById(1));

