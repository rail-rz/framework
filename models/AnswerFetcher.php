<?php
/**
 * AnswerFetcher
 * User: R2
 * Date: 29.08.12
 * Time: 17:37
 * To change this template use File | Settings | File Templates.
 */
require_once"Fetcher.php";
class AnswerFetcher extends Fetcher
{

    private  static $instance;

    public static function getInstance()
    {
        if(isset(self::$instance))
        return self::$instance;
        return self::$instance=new self();
    }

    public  function __construct()
    {
        parent::__construct();
    }

    private function __clone(){}

    public function getById($id)
    {
        return $this->getDb()->selectRow('SELECT * FROM answer WHERE id = ?', array($id));
    }

    public function getByPollId($pollId)
    {
        return $this->getDb()->selectAll('SELECT * FROM answer WHERE poll_id = ?',array($pollId));
    }
}
