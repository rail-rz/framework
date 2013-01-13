<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 13.01.13
 * Time: 4:07
 * To change this template use File | Settings | File Templates.
 */
require_once"Controller.php";
class AdminAnswerController extends Controller
{
    public function actionUpdate()
    {
        echo$_GET['poll_id'];
    }

}
