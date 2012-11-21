<?php
/**
 * Базовый класс
 * User: R2
 * Date: 19.09.12
 * Time: 19:40
 * To change this template use File | Settings | File Templates.
 */
class Fetcher
{
    public function __construct(){}

    public function getDb()
    {
        return Application::getInstance()->db;
    }
}
