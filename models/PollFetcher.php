<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 31.12.12
 * Time: 1:26
 * To change this template use File | Settings | File Templates.
 */
require_once"Fetcher.php";
class PollFetcher extends Fetcher
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
        return $this->getDb()->selectRow('SELECT * FROM poll WHERE id = ?', array($id));
    }

    public function getByPollId($pollId)
    {
        return $this->getDb()->selectAll('SELECT * FROM poll WHERE poll_id = ?',array($pollId));
    }

    public function getAll()
    {
        return $this->getDb()->selectAll('SELECT*FROM poll ORDER BY id');
    }
}
