<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 23.12.12
 * Time: 3:30
 * To change this template use File | Settings | File Templates.
 */
class QuestionsFetcher extends Fetcher
{
    public function getById($id)
    {
        return $this->getDb()->selectRow('SELECT * FROM question WHERE id = ?', array($id));
    }

    public function getByPollId($pollId)
    {
        return $this->getDb()->selectAll('SELECT * FROM question WHERE poll_id = ?',array($pollId));
    }
}
