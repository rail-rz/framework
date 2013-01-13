<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 4:04
 * To change this template use File | Settings | File Templates.
 */
require_once"Controller.php";
class AdminPollController extends Controller
{
    public function actionIndex()
    {
        $poll=PollFetcher::getInstance()->getAll();
        $this->render('index', array('poll'=>$poll));
    }

    public function actionCreate()
    {
        echo"ok";
    }

    public function actionUpdate()
    {
        echo$_GET['id'];
    }

    public function actionDelete()
    {
        echo$_GET['id'];
    }

    public function actionCheck()
    {
        echo$_GET['id'];
    }
}
