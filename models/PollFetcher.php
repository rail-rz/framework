<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 31.12.12
 * Time: 1:26
 * To change this template use File | Settings | File Templates.
 */
class PollFetcher extends Fetcher
{
    public function getById($id)
    {
        return $this->getDb()->selectRow('SELECT * FROM poll WHERE id = ?', array($id));
    }

    public function getAll()
    {
        return $this->getDb()->selectAll('SELECT * FROM poll');
    }

    public function updateById($text,$id)
    {
        return $this->getDb()->query('UPDATE poll SET name = ? WHERE id = ?',array($text,$id));
    }

    public function addString($text)
    {
         return $this->getDb()->getLastInsertId('INSERT INTO poll SET name = ?',array($text));
    }

    public function delete($pollId)
    {
        $this->getDb()->query('DELETE FROM poll WHERE id = ? ',array($pollId));
        $this->getDb()->query('DELETE FROM question WHERE poll_id = ? ',array($pollId));
        $this->getDb()->query('DELETE FROM answer WHERE poll_id = ? ',array($pollId));
        $this->getDb()->query('DELETE FROM vote WHERE poll_id = ? ',array($pollId));
    }
}
