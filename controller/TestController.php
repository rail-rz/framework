<?php
/**
 * Тестовый класс для проверки работаспособности программы
 * User: R2
 * Date: 18.10.12
 * Time: 0:26
 *
 */
require_once "controller/Controller.php";

//    $componentManager = new ComponentManager(array('answer' => array('class' => 'AnswerFetcher'),
//        'poll' => array('class' => 'PollFetcher'),
//        'db' => array('class' => 'db','__construct' => array('localhost', 'root', '', 'poll'),),
//    ));
//
//var_dump($componentManager->db->selectRow('SELECT * FROM answer WHERE id = ?', array(1)));


class TestController extends Controller
{

    public function actionIndex()
    {
        $post="hello world";
        $this->render('index', array('post' => $post));

    }
}