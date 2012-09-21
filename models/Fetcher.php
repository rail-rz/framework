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
    protected function __construct(){}

    protected function getDb()
    {
        return Application::getInstance()->getDb();
    }
}
