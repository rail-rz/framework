<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 25.08.13
 * Time: 1:44
 * To change this template use File | Settings | File Templates.
 */

class VoteFetcher extends Fetcher
{

    public function addStrings( $array, $poll_id)
    {
        $userRandom = mt_rand();
        foreach($array as $key => $var)
        {
            $this->getDb()->query(' INSERT INTO vote SET answer_id = ?, question_id = ?, poll_id = ?, user_id = ?',
                array( $var, $key, $poll_id, $userRandom));
        }
    }

    public function countQuestion($id)
    {
        return count($this->getDb()->selectAll('SELECT * FROM vote WHERE question_id = ?',array($id)));
    }

    public function countAnswer($id)
    {
        return count($this->getDb()->selectAll('SELECT * FROM vote WHERE answer_id = ?',array($id)));
    }

}