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

    public function getByQuestionId($questionId)
    {
        return $this->getDb()->selectAll('SELECT * FROM answer WHERE question_id = ?',array($questionId));
    }

    public function getByPollId($pollId)
    {
        return $this->getDb()->selectAll('SELECT * FROM answer WHERE poll_id = ?',array($pollId));
    }

    public function addSting($text, $questionId, $pollId)
    {
        return $this->getDb()->query('INSERT INTO answer SET answer = ?, question_id = ?, poll_id = ?',
            array( $text, $questionId, $pollId));
    }

    public function updateById($text,$id)
    {
        return $this->getDb()->query('UPDATE answer SET answer = ? WHERE id = ?',array($text,$id));
    }

    public function deleteById($id)
    {
        $this->getDb()->query('DELETE FROM answer WHERE id = ? ',array($id));
        $this->getDb()->query('DELETE FROM vote WHERE answer_id = ? ',array($id));
    }

}
