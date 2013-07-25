<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 4:04
 * To change this template use File | Settings | File Templates.
 */
class AdminPollController extends Controller
{
    public function actionIndex()
    {
        $polls = Application::getInstance()->fetchers->poll->getAll();
        $this->render('index', array('polls' => $polls));
    }

    public function actionCreate()
    {
        if(!isset($_POST['text']))
        {
            $this->render('create', array());
        }
        else
        {
            $poll_id = Application::getInstance()->fetchers->poll->addString($_POST['text']);
            header("Location: /index.php?r=adminQuestion/create&poll_id=$poll_id");
        }
    }

    public function actionUpdate()
    {
        $poll = Application::getInstance()->fetchers->poll->getById($_GET['id']);
        if(!empty($_POST['text']) and $_POST['text'] !== $poll['name'])
        {
            Application::getInstance()->fetchers->poll->updateById($_POST['text'], $_GET['id']);
            header("Location: /index.php?r=adminPoll/index");
        }
        else
        {
            $this->render('update', array('poll' => $poll));
        }

    }

    public function actionDelete()
    {
        Application::getInstance()->fetchers->poll->delete($_GET['id']);
        header("Location: /index.php?r=adminPoll/index");
    }

    public function actionCheck()
    {
        echo$_GET['id'];
    }
}
