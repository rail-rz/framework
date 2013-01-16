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
        return $this->getDb()->selectAll('SELECT*FROM poll');
    }

    public function updateById($text,$id,$originalText)
    {
        return $this->getDb()->selectRow('UPDATE poll SET name = ? WHERE id = ? AND name = ?',array($text,$id,$originalText));
    }
}
