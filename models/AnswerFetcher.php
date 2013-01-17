<?php
/**
 * AnswerFetcher
 * User: R2
 * Date: 29.08.12
 * Time: 17:37
 * To change this template use File | Settings | File Templates.
 */
class AnswerFetcher extends Fetcher
{
    public function getById($id)
    {
        return $this->getDb()->selectRow('SELECT * FROM answer WHERE id = ?', array($id));
    }

    public function getByPollId($pollId)
    {
        return $this->getDb()->selectAll('SELECT * FROM answer WHERE poll_id = ?',array($pollId));
    }

}
