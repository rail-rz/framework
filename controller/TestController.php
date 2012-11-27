<?php
/**
 * Тестовый класс для проверки работаспособности программы
 * User: R2
 * Date: 18.10.12
 * Time: 0:26
 *
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
require_once "controller/Controller.php";

//    $componentManager = new ComponentManager(array('answer' => array('class' => 'AnswerFetcher'),
//        'poll' => array('class' => 'PollFetcher'),
//        'db' => array('class' => 'db','__construct' => array('localhost', 'root', '', 'poll'),),
//    ));
//
//var_dump($componentManager->db->selectRow('SELECT * FROM answer WHERE id = ?', array(1)));


class TestController extends Controller
{
    protected  $config;

    public function __construct($config)
    {
        //$this->config=$config;\
        parent::__construct($config);
    }

    public function actionIndex()
    {
        echo$this->config;
        $this->render('index', array('post' => $post));

    }
}