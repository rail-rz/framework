<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 05.09.12
 * Time: 23:53
 * To change this template use File | Settings | File Templates.
 */
require_once("models/AnswerFetcher.php");
class AnswerController
{
    public function  actionIndex()
    {
        var_dump( AnswerFetcher::getInstance()->getById("1"));
        var_dump( AnswerFetcher::getInstance()->getByPollId("1"));
    }
}
