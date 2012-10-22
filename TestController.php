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

    $componentManager = new ComponentManager(array('answer' => array('class' => 'AnswerFetcher'),
        'poll' => array('class' => 'PollFetcher'),
        'db' => array('class' => 'db','__construct' => array('localhost', 'root', '', 'poll'),),
    ));
$componentManager->db->selectRow('SELECT * FROM answer WHERE id = ?', array(1));
