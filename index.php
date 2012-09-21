<?php
/**
 * Index
 * User: R2
 * Date: 05.09.12
 * Time: 23:49
 * To change this template use File | Settings | File Templates.
 */
require_once "Application.php";
Application::init(array ("db"=>(array("host"=>'localhost',"user"=> 'root',"password"=> '',"base"=> 'poll'))));
Application::getInstance()->run();