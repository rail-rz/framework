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
        $polls=Application::getInstance()->fetchers->poll->getAll();
        $this->render('index', array('polls'=>$polls));
    }

    public function actionCreate()
    {
        echo"ok";
    }

    public function actionUpdate()
    {
        $id=$_GET['id'];
        $poll=Application::getInstance()->fetchers->poll->getById($id);
        if(isset($_POST['text']) and $_POST['text']!==$poll['name'])
        {
            Application::getInstance()->fetchers->poll->updateById($_POST['text'],$id,$poll['name']);
        }
        else
        {
            $this->render('update', array('poll'=>$poll));
        }

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
