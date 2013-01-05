<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 23.12.12
 * Time: 0:37
 * To change this template use File | Settings | File Templates.
 */
require_once"Controller.php";
class PollController extends Controller
{
    public function actionCreate()
    {
        $this->render('create', array());
    }

    public function actionIndex()
    {
        $poll=PollFetcher::getInstance()->getAll();
        $this->render('index', array('poll'=>$poll));
    }

}
