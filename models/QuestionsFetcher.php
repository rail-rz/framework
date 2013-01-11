<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 23.12.12
 * Time: 3:30
 * To change this template use File | Settings | File Templates.
 */
require_once"Fetcher.php";
class QuestionsFetcher extends Fetcher
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
        return $this->getDb()->selectRow('SELECT * FROM question WHERE id = ?', array($id));
    }

    public function getByPollId($pollId)
    {
        return $this->getDb()->selectAll('SELECT * FROM question WHERE poll_id = ?',array($pollId));
    }
}
